<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RestaurantController extends Controller
{
    /**
     * Display the restaurant dashboard.
     */
    public function dashboard(): View
    {
        $restaurant = auth()->user()->restaurant;

        if (!$restaurant) {
            abort(403, 'Restaurant profile not found.');
        }

        $activeListings = $restaurant
            ->foodListings()
            ->where('status', 'available')
            ->where('available_until', '>', now())
            ->count();

        return view('restaurant.dashboard', compact('activeListings'));
    }

    /**
     * Display the restaurant business profile.
     */
    public function profile(): View
    {
        $restaurant = auth()->user()->restaurant;

        if (!$restaurant) {
            abort(403, 'Restaurant profile not found.');
        }

        return view('restaurant.profile', compact('restaurant'));
    }

    /**
     * Update the restaurant business profile.
     */
    public function updateProfile(Request $request): RedirectResponse
    {
        $restaurant = auth()->user()->restaurant;

        if (!$restaurant) {
            abort(403, 'Restaurant profile not found.');
        }

        $validated = $request->validate([
            'business_name' => [
                'required',
                'string',
                'max:255',
            ],

            'business_type' => [
                'nullable',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
                'max:2000',
            ],

            'phone' => [
                'nullable',
                'string',
                'max:20',
            ],

            'address' => [
                'required',
                'string',
                'max:255',
            ],

            'city' => [
                'required',
                'string',
                'max:100',
            ],

            'latitude' => [
                'nullable',
                'numeric',
                'between:-90,90',
            ],

            'longitude' => [
                'nullable',
                'numeric',
                'between:-180,180',
            ],
        ]);

        $restaurant->update($validated);

        return back()->with(
            'success',
            'Restaurant profile updated successfully.'
        );
    }
}
