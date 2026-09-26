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
        Schema::create('ngos', function (Blueprint $table) {
            $table->id();

            // Link NGO profile to the user account
            $table->foreignId('user_id')
                ->unique()
                ->constrained('users')
                ->cascadeOnDelete();

            // Organization information
            $table->string('organization_name');
            $table->string('registration_number')->nullable();
            $table->text('description')->nullable();

            // Contact information
            $table->string('phone', 20)->nullable();
            $table->string('address');
            $table->string('city');

            // NGO verification
            $table->string('verification_status')->default('pending');
            $table->timestamp('verified_at')->nullable();

            $table->timestamps();

            // Useful for searching and filtering
            $table->index('city');
            $table->index('verification_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngos');
    }
};
