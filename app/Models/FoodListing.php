<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FoodListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'title',
        'description',
        'food_type',
        'quantity',
        'quantity_unit',
        'price',
        'pickup_address',
        'available_until',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'quantity' => 'decimal:2',
            'price' => 'decimal:2',
            'available_until' => 'datetime',
        ];
    }

    /**
     * The restaurant that owns this food listing.
     */
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * Requests made for this food listing.
     */
    public function foodRequests(): HasMany
    {
        return $this->hasMany(FoodRequest::class);
    }
}
