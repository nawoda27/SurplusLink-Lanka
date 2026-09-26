<?php

namespace App\Http\Controllers;

use App\Models\DeliveryPartner;
use App\Models\DeliveryTask;
use App\Models\FoodListing;
use App\Models\FoodRequest;
use App\Models\Ngo;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function dashboard(): View
    {
        $statistics = [
            'totalUsers' => User::count(),

            'totalRestaurants' => Restaurant::count(),

            'totalNgos' => Ngo::count(),

            'totalDeliveryPartners' => DeliveryPartner::count(),

            'totalFoodListings' => FoodListing::count(),

            'totalFoodRequests' => FoodRequest::count(),

            'pendingVerifications' =>
                Restaurant::where('verification_status', 'pending')->count()
                + Ngo::where('verification_status', 'pending')->count()
                + DeliveryPartner::where('verification_status', 'pending')->count(),

            'completedDeliveries' =>
                DeliveryTask::where('status', 'delivered')->count(),
        ];

        return view(
            'admin.dashboard',
            compact('statistics')
        );
    }

    /**
     * Display all platform users with optional search and filters.
     */
    public function users(Request $request): View
    {
        $search = $request->input('search');
        $role = $request->input('role');
        $status = $request->input('status');

        $users = User::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
                });
            })
            ->when($role, function ($query, $role) {
                $query->where('role', $role);
            })
            ->when($status, function ($query, $status) {
                $query->where('status', $status);
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view(
            'admin.users',
            compact(
                'users',
                'search',
                'role',
                'status'
            )
        );
    }

    /**
     * Activate a user account.
     */
    public function activateUser(int $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        if ($user->status === 'active') {
            return back()->with(
                'success',
                'This user account is already active.'
            );
        }

        $user->update([
            'status' => 'active',
        ]);

        return back()->with(
            'success',
            'User account activated successfully.'
        );
    }

    /**
     * Deactivate a user account.
     */
    public function deactivateUser(int $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        /*
         * Prevent the currently authenticated admin
         * from deactivating their own account.
         */
        if ($user->id === auth()->id()) {
            return back()->withErrors([
                'user' => 'You cannot deactivate your own admin account.',
            ]);
        }

        if ($user->status !== 'active') {
            return back()->with(
                'success',
                'This user account is already inactive.'
            );
        }

        $user->update([
            'status' => 'inactive',
        ]);

        return back()->with(
            'success',
            'User account deactivated successfully.'
        );
    }
}