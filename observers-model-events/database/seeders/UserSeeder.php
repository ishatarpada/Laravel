<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect(
            [
                [
                    "id" => 1,
                    "name" => "Rajesh Kumar",
                    "email" => "rajesh.kumar@example.com"
                ],
                [
                    "id" => 2,
                    "name" => "Priya Sharma",
                    "email" => "priya.sharma@example.com"
                ],
                [
                    "id" => 3,
                    "name" => "Amit Singh",
                    "email" => "amit.singh@example.com"
                ],
                [
                    "id" => 4,
                    "name" => "Neha Verma",
                    "email" => "neha.verma@example.com"
                ],
                [
                    "id" => 5,
                    "name" => "Vikram Patel",
                    "email" => "vikram.patel@example.com"
                ],
                [
                    "id" => 6,
                    "name" => "Anjali Mehta",
                    "email" => "anjali.mehta@example.com"
                ],
                [
                    "id" => 7,
                    "name" => "Rahul Nair",
                    "email" => "rahul.nair@example.com"
                ],
                [
                    "id" => 8,
                    "name" => "Sneha Desai",
                    "email" => "sneha.desai@example.com"
                ],
                [
                    "id" => 9,
                    "name" => "Manish Gupta",
                    "email" => "manish.gupta@example.com"
                ],
                [
                    "id" => 10,
                    "name" => "Kiran Rao",
                    "email" => "kiran.rao@example.com"
                ]
            ]);

            $users->each(function($user){
                User::insert($user);
            });
    }
}
