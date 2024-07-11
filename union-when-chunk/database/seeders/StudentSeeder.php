<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(path: 'database/json/students.json');
        $students = collect(json_decode($json));

        $students->each(function ($student) {
            student::create([
                'name' => $student->name,
                'email' => $student->email,
                'age' => $student->age,
                'city' => $student->city
            ]);
        });
    }
}
