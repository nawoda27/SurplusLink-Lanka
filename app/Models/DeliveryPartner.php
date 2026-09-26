<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeliveryPartner extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'vehicle_type',
        'vehicle_number',
        'address',
        'city',
        'verification_status',
        'verified_at',
    ];

    protected function casts(): array
    {
        return [
            'verified_at' => 'datetime',
        ];
    }

    /**
     * The user account associated with this delivery partner.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}