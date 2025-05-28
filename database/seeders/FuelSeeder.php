<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('fuel_types')->insert([
            'name' => "Bensin",
        ]);
        DB::table('fuel_types')->insert([
            'name' => "Solar",
        ]);
        DB::table('fuel_types')->insert([
            'name' => "Hybrid",
        ]);
        DB::table('fuel_types')->insert([
            'name' => "Listrik",
        ]);
    }
}
