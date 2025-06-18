<?php

namespace Database\Seeders;

use App\Models\CarType;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            FuelSeeder::class,
            CarTypeSeeder::class,
            VehicleSeeder::class,
        ]);
    }
}
