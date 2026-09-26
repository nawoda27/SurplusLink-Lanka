<?php

namespace App\Http\Controllers;

use App\Models\DeliveryTask;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DeliveryPartnerController extends Controller
{
    /**
     * Display the delivery partner dashboard.
     */
    public function dashboard(): View
    {
        $user = auth()->user();
        $deliveryPartner = $user->deliveryPartner;

        if (!$deliveryPartner) {
            abort(403, 'Delivery partner profile not found.');
        }

        $availableDeliveries = DeliveryTask::with([
            'foodRequest.foodListing.restaurant',
            'foodRequest.requester',
        ])
        ->where('status', 'pending')
        ->whereNull('delivery_partner_id')
        ->latest()
        ->get();

        $myDeliveries = DeliveryTask::with([
            'foodRequest.foodListing.restaurant',
            'foodRequest.requester',
        ])
        ->where('delivery_partner_id', $deliveryPartner->id)
        ->latest()
        ->get();

        /**
         * Load the latest notifications for the dashboard preview.
         *
         * These come directly from Laravel's database notification
         * system. No fake or hard-coded notification data is used.
         */
        $recentNotifications = $user->notifications()
            ->latest()
            ->take(3)
            ->get();

        return view(
            'delivery-partner.dashboard',
            compact(
                'deliveryPartner',
                'availableDeliveries',
                'myDeliveries',
                'recentNotifications'
            )
        );
    }

    /**
     * Display the delivery partner profile.
     */
    public function profile(): View
    {
        $deliveryPartner = auth()->user()->deliveryPartner;

        if (!$deliveryPartner) {
            abort(403, 'Delivery partner profile not found.');
        }

        return view('delivery-partner.profile', compact('deliveryPartner'));
    }

    /**
     * Update the delivery partner profile.
     */
    public function updateProfile(Request $request): RedirectResponse
    {
        $deliveryPartner = auth()->user()->deliveryPartner;

        if (!$deliveryPartner) {
            abort(403, 'Delivery partner profile not found.');
        }

        $validated = $request->validate([
            'phone' => ['nullable', 'string', 'max:20'],
            'vehicle_type' => ['required', 'string', 'max:100'],
            'vehicle_number' => ['nullable', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:500'],
            'city' => ['required', 'string', 'max:100'],
        ]);

        $deliveryPartner->update($validated);

        return back()->with('success', 'Delivery partner profile updated successfully.');
    }

    /**
     * Accept an available delivery task.
     */
    public function accept(int $id): RedirectResponse
    {
        $deliveryPartner = auth()->user()->deliveryPartner;

        if (!$deliveryPartner) {
            abort(403, 'Delivery partner profile not found.');
        }

        try {
            DB::transaction(function () use ($id, $deliveryPartner) {
                /**
                 * Lock the delivery task while accepting it.
                 *
                 * This prevents two delivery partners from
                 * accepting the same task at the same time.
                 */
                $deliveryTask = DeliveryTask::where('id', $id)
                    ->where('status', 'pending')
                    ->whereNull('delivery_partner_id')
                    ->lockForUpdate()
                    ->firstOrFail();

                /**
                 * Assign the task to the authenticated
                 * delivery partner.
                 */
                $deliveryTask->update([
                    'delivery_partner_id' => $deliveryPartner->id,
                    'status' => 'assigned',
                    'assigned_at' => now(),
                ]);
            });
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return back()->withErrors([
                'delivery' => 'This delivery task is no longer available.',
            ]);
        }

        return back()->with('success', 'Delivery task accepted successfully.');
    }

    /**
     * Mark an assigned delivery as in transit.
     */
    public function markInTransit(int $id): RedirectResponse
    {
        $deliveryPartner = auth()->user()->deliveryPartner;

        if (!$deliveryPartner) {
            abort(403, 'Delivery partner profile not found.');
        }

        try {
            DB::transaction(function () use ($id, $deliveryPartner) {
                /**
                 * Only the delivery partner assigned to this task
                 * can change its status.
                 */
                $deliveryTask = DeliveryTask::where('id', $id)
                    ->where('delivery_partner_id', $deliveryPartner->id)
                    ->where('status', 'assigned')
                    ->lockForUpdate()
                    ->firstOrFail();

                $deliveryTask->update([
                    'status' => 'picked_up',
                    'picked_up_at'=> now(),
                ]);
            });
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return back()->withErrors([
                'delivery' => 'This delivery cannot be moved to in transit.',
            ]);
        }

        return back()->with('success', 'Delivery marked as In Transit.');
    }

    /**
     * Mark an in-transit delivery as completed.
     */
    public function markDelivered(int $id): RedirectResponse
    {
        $deliveryPartner = auth()->user()->deliveryPartner;

        if (!$deliveryPartner) {
            abort(403, 'Delivery partner profile not found.');
        }

        try {
            DB::transaction(function () use ($id, $deliveryPartner) {
                /**
                 * Only an in-transit delivery assigned to the
                 * authenticated partner can be completed.
                 */
                $deliveryTask = DeliveryTask::where('id', $id)
                    ->where('delivery_partner_id', $deliveryPartner->id)
                    ->where('status', 'picked_up')
                    ->lockForUpdate()
                    ->firstOrFail();

                $deliveryTask->update([
                    'status' => 'delivered',
                    'delivered_at' => now(),
                ]);
            });
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return back()->withErrors([
                'delivery' => 'This delivery cannot be completed.',
            ]);
        }

        return back()->with('success', 'Delivery completed successfully.');
    }
}
