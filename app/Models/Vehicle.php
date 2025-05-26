<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'description',
        'maker',
        'model',
        'year',
        'vin',
        'license_plate',
        'kilometers',
        'address',
        'user_id',
        'fuel_type_id',
        'car_type_id',
    ];

    /**
     * Get the user that owns the Vehicle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the fuel type for the vehicle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class, 'fuel_type_id', 'id');
    }

    /**
     * Get the car type for the vehicle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class, 'car_type_id', 'id');
    }
}
