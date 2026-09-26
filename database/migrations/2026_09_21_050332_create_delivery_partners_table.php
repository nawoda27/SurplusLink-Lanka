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
        /*
         * The delivery_partners table already exists in the database.
         * Add the required production fields to the existing table.
         */
        Schema::table('delivery_partners', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->nullable()
                ->after('id');

            $table->string('phone', 30)
                ->nullable()
                ->after('user_id');

            $table->string('vehicle_type', 50)
                ->nullable()
                ->after('phone');

            $table->string('vehicle_number', 50)
                ->nullable()
                ->after('vehicle_type');

            $table->string('address', 500)
                ->nullable()
                ->after('vehicle_number');

            $table->string('city', 100)
                ->nullable()
                ->after('address');

            $table->string('verification_status')
                ->default('pending')
                ->after('city');

            $table->timestamp('verified_at')
                ->nullable()
                ->after('verification_status');

            $table->index('verification_status');
            $table->index('city');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('delivery_partners', function (Blueprint $table) {
            $table->dropIndex(['verification_status']);
            $table->dropIndex(['city']);

            $table->dropColumn([
                'user_id',
                'phone',
                'vehicle_type',
                'vehicle_number',
                'address',
                'city',
                'verification_status',
                'verified_at',
            ]);
        });
    }
};