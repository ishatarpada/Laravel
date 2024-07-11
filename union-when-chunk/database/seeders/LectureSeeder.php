<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\lecture;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/lecture.json');
        $lectures = collect(json_decode($json));

        $lectures->each(function ($lecture) {
            lecture::create([
                'name' => $lecture->name,
                'email' => $lecture->email,
                'age' => $lecture->age,
                'city' => $lecture->city
            ]);
        });
    }
}
