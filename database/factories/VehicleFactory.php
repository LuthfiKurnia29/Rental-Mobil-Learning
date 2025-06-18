<?php

namespace Database\Factories;

use App\Models\Vehicle;
use App\Models\User;
use App\Models\FuelType;
use App\Models\CarType;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'maker' => $this->faker->company(),
            'model' => $this->faker->word(),
            'year' => $this->faker->year(),
            'vin' => $this->faker->unique()->bothify('??######??#######'),
            'license_plate' => $this->faker->unique()->bothify('??####'),
            'kilometers' => $this->faker->numberBetween(0, 200000),
            'address' => $this->faker->address(),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'fuel_type_id' => FuelType::inRandomOrder()->first()?->id ?? FuelType::factory(),
            'car_type_id' => CarType::inRandomOrder()->first()?->id ?? CarType::factory(),
        ];
    }
}
