<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeliveryTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_request_id',
        'delivery_partner_id',
        'pickup_address',
        'delivery_address',
        'status',
        'assigned_at',
        'picked_up_at',
        'delivered_at',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'assigned_at' => 'datetime',
            'picked_up_at' => 'datetime',
            'delivered_at' => 'datetime',
        ];
    }

    /**
     * The food request associated with this delivery task.
     */
    public function foodRequest(): BelongsTo
    {
        return $this->belongsTo(FoodRequest::class);
    }

    /**
     * The delivery partner assigned to this task.
     */
    public function deliveryPartner(): BelongsTo
    {
        return $this->belongsTo(DeliveryPartner::class);
    }
}