<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load JSON data from the file
        $json = File::get(path: 'database/json/user.json');
        $user = collect(json_decode($json));

        $user->each(function ($user) {
            User::create([
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]);
        });
    }
}
