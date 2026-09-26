<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NgoController extends Controller
{
    /**
     * Display the NGO dashboard.
     */
    public function dashboard(): View
    {
        return view('ngo.dashboard');
    }

    /**
     * Display the NGO organization profile.
     */
    public function profile(): View
    {
        $ngo = auth()->user()->ngo;

        if (!$ngo) {
            abort(403, 'NGO profile not found.');
        }

        return view('ngo.profile', compact('ngo'));
    }

    /**
     * Update the NGO organization profile.
     */
    public function updateProfile(Request $request): RedirectResponse
    {
        $ngo = auth()->user()->ngo;

        if (!$ngo) {
            abort(403, 'NGO profile not found.');
        }

        $validated = $request->validate([
            'organization_name' => [
                'required',
                'string',
                'max:255',
            ],

            'registration_number' => [
                'nullable',
                'string',
                'max:100',
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
                'max:500',
            ],

            'city' => [
                'required',
                'string',
                'max:100',
            ],
        ]);

        $ngo->update($validated);

        return back()->with(
            'success',
            'NGO profile updated successfully.'
        );
    }
}