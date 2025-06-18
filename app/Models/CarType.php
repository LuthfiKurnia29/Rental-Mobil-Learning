<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class CarType extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'name',
    ];
    /**
     * Get all of the vehicles for the CarType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class, 'car_type_id', 'id');
    }
}
