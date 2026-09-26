<?php

namespace App\Http\Controllers;

use App\Models\FoodRequest;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function customer(): View
    {
        $user = auth()->user();

        $requests = FoodRequest::where('requester_id', $user->id);

        $activity = [
            'total' => (clone $requests)->count(),
            'pending' => (clone $requests)->where('status', 'pending')->count(),
            'approved' => (clone $requests)->where('status', 'approved')->count(),
            'completed' => (clone $requests)->where('status', 'completed')->count(),
        ];

        $recentNotifications = $user->notifications()
            ->latest()
            ->take(3)
            ->get();

        return view('dashboard', compact(
            'activity',
            'recentNotifications'
        ));
    }
}
