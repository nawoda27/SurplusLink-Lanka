<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('food_listings', function (Blueprint $table) {
            $table->id();

            // Restaurant that published this food listing
            $table->foreignId('restaurant_id')
                ->constrained('restaurants')
                ->cascadeOnDelete();

            // Food information
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('food_type')->nullable();

            // Quantity information
            $table->decimal('quantity', 10, 2);
            $table->string('quantity_unit', 30)->default('portions');

            // Pricing
            $table->decimal('price', 10, 2)->default(0);

            // Pickup information
            $table->string('pickup_address');
            $table->dateTime('available_until');

            // Listing status
            $table->string('status')->default('available');

            $table->timestamps();

            // Indexes for faster filtering/searching
            $table->index('restaurant_id');
            $table->index('food_type');
            $table->index('status');
            $table->index('available_until');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('food_listings');
    }
};