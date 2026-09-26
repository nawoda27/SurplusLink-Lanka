<?php

namespace App\Models;

use App\Models\DeliveryPartner;
use App\Models\FoodRequest;
use App\Models\Ngo;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
        'address',
        'city',
        'postal_code',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function restaurant(): HasOne
    {
        return $this->hasOne(Restaurant::class);
    }

    public function ngo(): HasOne
    {
        return $this->hasOne(Ngo::class);
    }

    public function deliveryPartner(): HasOne
    {
        return $this->hasOne(DeliveryPartner::class);
    }

    public function foodRequests(): HasMany
    {
        return $this->hasMany(FoodRequest::class, 'requester_id');
    }
}