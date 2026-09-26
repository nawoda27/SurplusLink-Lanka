<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FoodRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_listing_id',
        'requester_id',
        'quantity',
        'message',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'quantity' => 'decimal:2',
        ];
    }

    /**
     * The food listing associated with this request.
     */
    public function foodListing(): BelongsTo
    {
        return $this->belongsTo(FoodListing::class);
    }

    /**
     * The user who submitted this request.
     */
    public function requester(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requester_id');
    }

    /**
     * The delivery task associated with this request.
     */
    public function deliveryTask(): HasOne
    {
        return $this->hasOne(DeliveryTask::class);
    }
}