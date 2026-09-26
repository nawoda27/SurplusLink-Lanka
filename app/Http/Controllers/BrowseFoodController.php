<?php

namespace App\Http\Controllers;

use App\Models\FoodListing;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BrowseFoodController extends Controller
{
    /**
     * Display available surplus food listings
     * with optional search and filters.
     */
    public function index(Request $request): View
    {
        $search = $request->input('search');
        $foodType = $request->input('food_type');
        $city = $request->input('city');

        $foodListings = FoodListing::with('restaurant')
            ->where('status', 'available')
            ->where('available_until', '>', now())
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%');
                });
            })
            ->when($foodType, function ($query, $foodType) {
                $query->where('food_type', $foodType);
            })
            ->when($city, function ($query, $city) {
                $query->whereHas('restaurant', function ($query) use ($city) {
                    $query->where('city', $city);
                });
            })
            ->latest()
            ->get();

        $foodTypes = FoodListing::query()
            ->where('status', 'available')
            ->where('available_until', '>', now())
            ->whereNotNull('food_type')
            ->where('food_type', '!=', '')
            ->distinct()
            ->orderBy('food_type')
            ->pluck('food_type');

        $cities = FoodListing::query()
            ->with('restaurant')
            ->where('status', 'available')
            ->where('available_until', '>', now())
            ->whereHas('restaurant', function ($query) {
                $query->whereNotNull('city')
                    ->where('city', '!=', '');
            })
            ->get()
            ->pluck('restaurant.city')
            ->filter()
            ->unique()
            ->sort()
            ->values();

        return view(
            'food.index',
            compact(
                'foodListings',
                'foodTypes',
                'cities',
                'search',
                'foodType',
                'city'
            )
        );
    }

    /**
     * Display the food request form.
     */
    public function create(int $foodListingId): View
    {
        $foodListing = FoodListing::with('restaurant')
            ->where('id', $foodListingId)
            ->where('status', 'available')
            ->where('available_until', '>', now())
            ->firstOrFail();

        return view(
            'food-requests.create',
            compact('foodListing')
        );
    }
}
