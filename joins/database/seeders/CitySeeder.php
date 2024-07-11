<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\city;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/city.json');
        $city = collect(json_decode($json));

        $city->each(function ($city) {
            city::create([
                'city_name' => $city->city_name
            ]);
        });
    }
}
