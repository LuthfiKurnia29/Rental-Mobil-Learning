<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class VehicleDetail extends Model
{
    //
    protected $fillable = [
        'vehicle_id',
        'description',
    ];
    public function vehicle(): HasOne
    {
        return $this->hasOne(Vehicle::class, 'vehicle_id', 'id');
    }
}
