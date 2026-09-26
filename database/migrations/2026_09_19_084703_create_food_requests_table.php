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
        Schema::create('food_requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('food_listing_id')
                ->constrained('food_listings')
                ->cascadeOnDelete();

            $table->foreignId('requester_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->decimal('quantity', 10, 2);

            $table->text('message')->nullable();

            $table->enum('status', [
                'pending',
                'approved',
                'rejected',
                'completed',
            ])->default('pending');

            $table->timestamps();

            $table->index(['requester_id', 'status']);
            $table->index(['food_listing_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_requests');
    }
};