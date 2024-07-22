<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load JSON data from the file
        $json = File::get(path: 'database/json/students_data.json');
        $info = collect(json_decode($json));

        $info->each(function ($info) {
            Student::create([
                'name' => $info->name,
                'age' => $info->age,
                'gender' => $info->gender
            ]);
        });
    }
}
