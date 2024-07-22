<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Contacts;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([
            ContactsSeeder::class
        ]);

        $this->call([
            StudentsSeeder::class
        ]);
    }
}
