<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('car_types')->insert([
            'name' => "SUV",
        ]);
        DB::table('car_types')->insert([
            'name' => "MPV",
        ]);
        DB::table('car_types')->insert([
            'name' => "Sport",
        ]);
    }
}
