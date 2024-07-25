<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load JSON data from the file
        $json = File::get(path: 'database/json/roles.json');
        $role = collect(json_decode($json));

        $role->each(function ($role) {
            Role::create([
                'id' => $role->id,
                'role_name' => $role->role_name
            ]);
        });
    }
}
