<?php

namespace Database\Seeders;

use App\Models\DeliveryPartner;
use App\Models\User;
use Illuminate\Database\Seeder;

class DeliveryPartnerSeeder extends Seeder
{
    /**
     * Create a test delivery partner account and profile.
     */
    public function run(): void
    {
        $user = User::updateOrCreate(
            [
                'email' => 'delivery@surpluslink.lk',
            ],
            [
                'name' => 'Test Delivery Partner',
                'password' => 'Password@123',
                'role' => 'delivery_partner',
                'status' => 'active',
            ]
        );

        DeliveryPartner::updateOrCreate(
            [
                'user_id' => $user->id,
            ],
            [
                'phone' => '0771234567',
                'vehicle_type' => 'Motorcycle',
                'vehicle_number' => 'WP ABC-1234',
                'address' => 'Main Street',
                'city' => 'Ratnapura',
                'verification_status' => 'verified',
                'verified_at' => now(),
            ]
        );

        $this->command->info(
            'Test Delivery Partner account created successfully.'
        );
    }
}