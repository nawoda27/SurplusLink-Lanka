<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();

            // Link restaurant profile to the authenticated user
            $table->foreignId('user_id')
                ->unique()
                ->constrained('users')
                ->cascadeOnDelete();

            // Business information
            $table->string('business_name');
            $table->string('business_type')->nullable();
            $table->text('description')->nullable();

            // Contact information
            $table->string('phone', 20)->nullable();
            $table->string('address');
            $table->string('city');

            // Location - useful later for maps and nearby food
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();

            // Business verification
            $table->string('verification_status')->default('pending');
            $table->timestamp('verified_at')->nullable();

            $table->timestamps();

            // Useful for searching/filtering restaurants
            $table->index('city');
            $table->index('verification_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
