<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/user_role.json');
        $userRoles = collect(json_decode($json));

        $userRoles->each(function ($userRole) {
            UserRole::create([
                'user_id' => $userRole->user_id,
                'role_id' => $userRole->role_id
            ]);
        });
    }
}
