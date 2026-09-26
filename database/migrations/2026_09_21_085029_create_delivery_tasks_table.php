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
        Schema::create('delivery_tasks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('food_request_id')
                ->constrained('food_requests')
                ->cascadeOnDelete();

            $table->foreignId('delivery_partner_id')
                ->nullable()
                ->constrained('delivery_partners')
                ->nullOnDelete();

            $table->string('pickup_address', 500);

            $table->string('delivery_address', 500);

            $table->string('status', 30)
                ->default('pending')
                ->index();

            $table->timestamp('assigned_at')
                ->nullable();

            $table->timestamp('picked_up_at')
                ->nullable();

            $table->timestamp('delivered_at')
                ->nullable();

            $table->text('notes')
                ->nullable();

            $table->timestamps();

            $table->index('food_request_id');
            $table->index('delivery_partner_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_tasks');
    }
};