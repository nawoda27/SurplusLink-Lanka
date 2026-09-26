<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FoodListingController extends Controller
{
    /**
     * Restaurantge okkoma listings pennana eka
     */
    public function index(): View
    {
        $restaurant = auth()->user()->restaurant;

        // Restaurant ekak nathnam dashboard ekata yawanawa
        if (!$restaurant) {
            abort(404, 'Restaurant profile not found for this user.');
        }

        $foodListings = $restaurant->foodListings()->latest()->get();

        return view('restaurant.food-listings.index', compact('foodListings'));
    }

    /**
     * Aluth listing ekak hadanna form eka
     */
    public function create(): View
    {
        return view('restaurant.food-listings.create');
    }

    /**
     * Aluth listing eka database ekata danawa
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'          => ['required', 'string', 'max:255'],
            'description'    => ['nullable', 'string', 'max:2000'],
            'food_type'      => ['nullable', 'string', 'max:100'],
            'quantity'       => ['required', 'numeric', 'min:0.01'],
            'quantity_unit'  => ['required', 'string', 'max:30'],
            'price'          => ['required', 'numeric', 'min:0'],
            'pickup_address' => ['required', 'string', 'max:500'],
            'available_until'=> ['required', 'date', 'after:now'],
        ]);

        $restaurant = auth()->user()->restaurant;

        $restaurant->foodListings()->create([
            ...$validated,
            'status' => 'available',
        ]);

        return redirect()
            ->route('restaurant.food-listings.index')
            ->with('success', 'Food listing created successfully.');
    }

    /**
     * Edit karana form eka
     */
    public function edit(int $id): View
    {
        $restaurant = auth()->user()->restaurant;

        $foodListing = $restaurant->foodListings()->findOrFail($id);

        return view('restaurant.food-listings.edit', compact('foodListing'));
    }

    /**
     * Edit karapu eka update karanawa
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $restaurant = auth()->user()->restaurant;
        $foodListing = $restaurant->foodListings()->findOrFail($id);

        $validated = $request->validate([
            'title'          => ['required', 'string', 'max:255'],
            'description'    => ['nullable', 'string', 'max:2000'],
            'food_type'      => ['nullable', 'string', 'max:100'],
            'quantity'       => ['required', 'numeric', 'min:0.01'],
            'quantity_unit'  => ['required', 'string', 'max:30'],
            'price'          => ['required', 'numeric', 'min:0'],
            'pickup_address' => ['required', 'string', 'max:500'],
            'available_until'=> ['required', 'date', 'after:now'],
        ]);

        $foodListing->update($validated);

        return redirect()
            ->route('restaurant.food-listings.index')
            ->with('success', 'Food listing updated successfully.');
    }

    /**
     * Listing eka delete karanawa
     */
    public function destroy(int $id): RedirectResponse
    {
        $restaurant = auth()->user()->restaurant;
        $foodListing = $restaurant->foodListings()->findOrFail($id);

        $foodListing->delete();

        return redirect()
            ->route('restaurant.food-listings.index')
            ->with('success', 'Food listing deleted successfully.');
    }
}