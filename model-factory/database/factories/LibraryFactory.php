<?php

namespace Database\Factories;

use App\Models\Library;
// use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Library>
 */
class LibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $studentIds = DB::table('students')->pluck('id')->toArray();
        return [
            // 'stu_id' => fake()->randomElement($studentIds),
            'book' => fake()->sentence(3),
            'due_date' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'status' => fake()->boolean(),
        ];
    }
}
