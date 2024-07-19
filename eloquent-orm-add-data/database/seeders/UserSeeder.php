<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $json = File::get(path: 'database/json/data.json');
        $data = collect(json_decode($json));

        $data->each(function ($data) {
            User::create([
                'name' => $data->name,
                'email' => $data->email,
                'age' => $data->age,
                'city' => $data->city
            ]);
        });
    }
}
