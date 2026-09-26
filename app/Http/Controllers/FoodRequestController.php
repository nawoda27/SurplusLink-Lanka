<?php

namespace App\Http\Controllers;

use App\Models\DeliveryTask;
use App\Models\FoodListing;
use App\Models\FoodRequest;
use App\Notifications\FoodRequestStatusNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FoodRequestController extends Controller
{
    /**
     * Display food requests received by the authenticated restaurant.
     */
    public function index(): View
    {
        $restaurant = auth()->user()->restaurant;

        $foodRequests = FoodRequest::with([
                'foodListing',
                'requester',
            ])
            ->whereHas('foodListing', function ($query) use ($restaurant) {
                $query->where('restaurant_id', $restaurant->id);
            })
            ->latest()
            ->get();

        return view(
            'restaurant.food-requests.index',
            compact('foodRequests')
        );
    }

    /**
     * Display food requests made by the authenticated customer or NGO.
     *
     * The food listing, restaurant, and delivery task are loaded
     * together so the page can display the complete request status.
     */
    public function myRequests(): View
    {
        $foodRequests = FoodRequest::with([
                'foodListing.restaurant',
                'deliveryTask',
            ])
            ->where('requester_id', auth()->id())
            ->latest()
            ->get();

        return view(
            'food-requests.my-requests',
            compact('foodRequests')
        );
    }

    /**
     * Store a new food request from a customer or NGO.
     */
    public function store(
        Request $request,
        int $foodListingId
    ): RedirectResponse {
        /*
         * Only customers and NGOs can request surplus food.
         */
        if (!in_array(auth()->user()->role, ['customer', 'ngo'], true)) {
            abort(403, 'Only customers and NGOs can request surplus food.');
        }

        $validated = $request->validate([
            'quantity' => ['required', 'numeric', 'min:0.01'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        $foodListing = FoodListing::where('id', $foodListingId)
            ->where('status', 'available')
            ->where('available_until', '>', now())
            ->firstOrFail();

        /*
         * Make sure the requested quantity does not exceed
         * the currently available quantity.
         */
        if ((float) $validated['quantity'] > (float) $foodListing->quantity) {
            return back()
                ->withErrors([
                    'quantity' => 'Requested quantity cannot exceed the available quantity.',
                ])
                ->withInput();
        }

        /*
         * Prevent the same customer/NGO from having
         * multiple pending requests for the same listing.
         */
        $existingRequest = $foodListing
            ->foodRequests()
            ->where('requester_id', auth()->id())
            ->where('status', 'pending')
            ->exists();

        if ($existingRequest) {
            return back()
                ->withErrors([
                    'quantity' => 'You already have a pending request for this food listing.',
                ])
                ->withInput();
        }

        $foodListing->foodRequests()->create([
            'requester_id' => auth()->id(),
            'quantity' => $validated['quantity'],
            'message' => $validated['message'] ?? null,
            'status' => 'pending',
        ]);

        return back()->with(
            'success',
            'Food request submitted successfully.'
        );
    }

    /**
     * Approve a food request, allocate the requested quantity,
     * create a delivery task, and notify the requester.
     */
    public function approve(int $id): RedirectResponse
    {
        $restaurant = auth()->user()->restaurant;

        try {
            DB::transaction(function () use ($id, $restaurant) {

                /*
                 * Lock the request while processing the approval.
                 */
                $foodRequest = FoodRequest::where('id', $id)
                    ->where('status', 'pending')
                    ->whereHas('foodListing', function ($query) use ($restaurant) {
                        $query->where('restaurant_id', $restaurant->id);
                    })
                    ->lockForUpdate()
                    ->firstOrFail();

                /*
                 * Lock the food listing row.
                 *
                 * This prevents two restaurant approval operations
                 * from changing the same inventory at the same time.
                 */
                $foodListing = FoodListing::where(
                        'id',
                        $foodRequest->food_listing_id
                    )
                    ->lockForUpdate()
                    ->firstOrFail();

                /*
                 * Re-check listing availability while the row is locked.
                 */
                if (
                    $foodListing->status !== 'available' ||
                    $foodListing->available_until <= now()
                ) {
                    throw new \RuntimeException(
                        'This food listing is no longer available.'
                    );
                }

                /*
                 * Check the latest inventory quantity.
                 */
                if (
                    (float) $foodRequest->quantity >
                    (float) $foodListing->quantity
                ) {
                    throw new \RuntimeException(
                        'The requested quantity is no longer available.'
                    );
                }

                /*
                 * Allocate the requested quantity from the listing.
                 */
                $foodListing->decrement(
                    'quantity',
                    $foodRequest->quantity
                );

                /*
                 * If all food has been allocated,
                 * mark the listing as unavailable.
                 */
                if ((float) $foodListing->quantity <= 0) {
                    $foodListing->update([
                        'status' => 'unavailable',
                    ]);
                }

                /*
                 * Mark the request as approved.
                 */
                $foodRequest->update([
                    'status' => 'approved',
                ]);

                /*
                 * Create a delivery task for the approved request.
                 *
                 * The delivery partner is not assigned yet.
                 * It will initially appear as "pending".
                 */
                DeliveryTask::create([
                    'food_request_id' => $foodRequest->id,
                    'delivery_partner_id' => null,
                    'pickup_address' => $foodListing->pickup_address,
                    'delivery_address' => $foodRequest->requester->address
                        ?? 'Delivery address not provided',
                    'status' => 'pending',
                    'assigned_at' => null,
                    'picked_up_at' => null,
                    'delivered_at' => null,
                    'notes' => null,
                ]);
            });

        } catch (\RuntimeException $exception) {

            return back()->withErrors([
                'request' => $exception->getMessage(),
            ]);
        }

        /*
         * Send the notification only after the transaction
         * has completed successfully.
         *
         * This prevents a notification from being created
         * when the approval transaction fails or rolls back.
         */
        $approvedRequest = FoodRequest::with([
                'foodListing',
                'requester',
            ])
            ->findOrFail($id);

        $approvedRequest->requester->notify(
            new FoodRequestStatusNotification(
                'Food Request Approved',
                'Your request for "' . $approvedRequest->foodListing->title
                    . '" has been approved.',
                $approvedRequest->id
            )
        );

        return back()->with(
            'success',
            'Food request approved and delivery task created successfully.'
        );
    }

    /**
     * Reject a food request and notify the requester.
     */
    public function reject(int $id): RedirectResponse
    {
        $restaurant = auth()->user()->restaurant;

        $foodRequest = FoodRequest::with([
                'foodListing',
                'requester',
            ])
            ->where('id', $id)
            ->whereHas('foodListing', function ($query) use ($restaurant) {
                $query->where('restaurant_id', $restaurant->id);
            })
            ->firstOrFail();

        if ($foodRequest->status !== 'pending') {
            return back()->withErrors([
                'request' => 'Only pending requests can be rejected.',
            ]);
        }

        $foodRequest->update([
            'status' => 'rejected',
        ]);

        /*
         * Notify the requester after the request has been
         * successfully marked as rejected.
         */
        $foodRequest->requester->notify(
            new FoodRequestStatusNotification(
                'Food Request Rejected',
                'Your request for "' . $foodRequest->foodListing->title
                    . '" has been rejected by the restaurant.',
                $foodRequest->id
            )
        );

        return back()->with(
            'success',
            'Food request rejected successfully.'
        );
    }
}