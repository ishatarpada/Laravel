<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect(
            [
                [
                    "id" => 1,
                    "title" => "First Blog Post",
                    "slug" => "first-blog-post",
                    "description" => "This is the description of the first blog post.",
                    "counter" => 10,
                    "user_id" => 1,
                    "created_at" => "2024-07-25T12:00:00",
                    "updated_at" => "2024-07-25T12:00:00"
                ],
                [
                    "id" => 2,
                    "title" => "Travel Tips",
                    "slug" => "travel-tips",
                    "description" => "This is the description of the travel tips blog post.",
                    "counter" => 20,
                    "user_id" => 2,
                    "created_at" => "2024-07-26T12:00:00",
                    "updated_at" => "2024-07-26T12:00:00"
                ],
                [
                    "id" => 3,
                    "title" => "Delicious Recipes",
                    "slug" => "delicious-recipes",
                    "description" => "This is the description of the delicious recipes blog post.",
                    "counter" => 30,
                    "user_id" => 3,
                    "created_at" => "2024-07-27T12:00:00",
                    "updated_at" => "2024-07-27T12:00:00"
                ],
                [
                    "id" => 4,
                    "title" => "Technology Trends",
                    "slug" => "technology-trends",
                    "description" => "This is the description of the technology trends blog post.",
                    "counter" => 40,
                    "user_id" => 4,
                    "created_at" => "2024-07-28T12:00:00",
                    "updated_at" => "2024-07-28T12:00:00"
                ],
                [
                    "id" => 5,
                    "title" => "Healthy Lifestyle",
                    "slug" => "healthy-lifestyle",
                    "description" => "This is the description of the healthy lifestyle blog post.",
                    "counter" => 50,
                    "user_id" => 5,
                    "created_at" => "2024-07-29T12:00:00",
                    "updated_at" => "2024-07-29T12:00:00"
                ],
                [
                    "id" => 6,
                    "title" => "Fitness Routines",
                    "slug" => "fitness-routines",
                    "description" => "This is the description of the fitness routines blog post.",
                    "counter" => 60,
                    "user_id" => 1,
                    "created_at" => "2024-07-30T12:00:00",
                    "updated_at" => "2024-07-30T12:00:00"
                ],
                [
                    "id" => 7,
                    "title" => "Investment Strategies",
                    "slug" => "investment-strategies",
                    "description" => "This is the description of the investment strategies blog post.",
                    "counter" => 70,
                    "user_id" => 2,
                    "created_at" => "2024-07-31T12:00:00",
                    "updated_at" => "2024-07-31T12:00:00"
                ],
                [
                    "id" => 8,
                    "title" => "Cooking Tips",
                    "slug" => "cooking-tips",
                    "description" => "This is the description of the cooking tips blog post.",
                    "counter" => 80,
                    "user_id" => 3,
                    "created_at" => "2024-08-01T12:00:00",
                    "updated_at" => "2024-08-01T12:00:00"
                ],
                [
                    "id" => 9,
                    "title" => "Career Advice",
                    "slug" => "career-advice",
                    "description" => "This is the description of the career advice blog post.",
                    "counter" => 90,
                    "user_id" => 4,
                    "created_at" => "2024-08-02T12:00:00",
                    "updated_at" => "2024-08-02T12:00:00"
                ],
                [
                    "id" => 10,
                    "title" => "Mindfulness Practices",
                    "slug" => "mindfulness-practices",
                    "description" => "This is the description of the mindfulness practices blog post.",
                    "counter" => 100,
                    "user_id" => 5,
                    "created_at" => "2024-08-03T12:00:00",
                    "updated_at" => "2024-08-03T12:00:00"
                ],
                [
                    "id" => 11,
                    "title" => "Gardening Tips",
                    "slug" => "gardening-tips",
                    "description" => "This is the description of the gardening tips blog post.",
                    "counter" => 110,
                    "user_id" => 6,
                    "created_at" => "2024-08-04T12:00:00",
                    "updated_at" => "2024-08-04T12:00:00"
                ],
                [
                    "id" => 12,
                    "title" => "Home Improvement",
                    "slug" => "home-improvement",
                    "description" => "This is the description of the home improvement blog post.",
                    "counter" => 120,
                    "user_id" => 7,
                    "created_at" => "2024-08-05T12:00:00",
                    "updated_at" => "2024-08-05T12:00:00"
                ],
                [
                    "id" => 13,
                    "title" => "Fitness Motivation",
                    "slug" => "fitness-motivation",
                    "description" => "This is the description of the fitness motivation blog post.",
                    "counter" => 130,
                    "user_id" => 8,
                    "created_at" => "2024-08-06T12:00:00",
                    "updated_at" => "2024-08-06T12:00:00"
                ],
                [
                    "id" => 14,
                    "title" => "Personal Finance",
                    "slug" => "personal-finance",
                    "description" => "This is the description of the personal finance blog post.",
                    "counter" => 140,
                    "user_id" => 9,
                    "created_at" => "2024-08-07T12:00:00",
                    "updated_at" => "2024-08-07T12:00:00"
                ],
                [
                    "id" => 15,
                    "title" => "Travel Destinations",
                    "slug" => "travel-destinations",
                    "description" => "This is the description of the travel destinations blog post.",
                    "counter" => 150,
                    "user_id" => 10,
                    "created_at" => "2024-08-08T12:00:00",
                    "updated_at" => "2024-08-08T12:00:00"
                ],
                [
                    "id" => 16,
                    "title" => "Eco-Friendly Living",
                    "slug" => "eco-friendly-living",
                    "description" => "This is the description of the eco-friendly living blog post.",
                    "counter" => 160,
                    "user_id" => 6,
                    "created_at" => "2024-08-09T12:00:00",
                    "updated_at" => "2024-08-09T12:00:00"
                ],
                [
                    "id" => 17,
                    "title" => "Pet Care",
                    "slug" => "pet-care",
                    "description" => "This is the description of the pet care blog post.",
                    "counter" => 170,
                    "user_id" => 7,
                    "created_at" => "2024-08-10T12:00:00",
                    "updated_at" => "2024-08-10T12:00:00"
                ],
                [
                    "id" => 18,
                    "title" => "Healthy Eating",
                    "slug" => "healthy-eating",
                    "description" => "This is the description of the healthy eating blog post.",
                    "counter" => 180,
                    "user_id" => 8,
                    "created_at" => "2024-08-11T12:00:00",
                    "updated_at" => "2024-08-11T12:00:00"
                ],
                [
                    "id" => 19,
                    "title" => "Productivity Hacks",
                    "slug" => "productivity-hacks",
                    "description" => "This is the description of the productivity hacks blog post.",
                    "counter" => 190,
                    "user_id" => 9,
                    "created_at" => "2024-08-12T12:00:00",
                    "updated_at" => "2024-08-12T12:00:00"
                ],
                [
                    "id" => 20,
                    "title" => "DIY Projects",
                    "slug" => "diy-projects",
                    "description" => "This is the description of the DIY projects blog post.",
                    "counter" => 200,
                    "user_id" => 10,
                    "created_at" => "2024-08-13T12:00:00",
                    "updated_at" => "2024-08-13T12:00:00"
                ]
            ]
        );

        $posts->each(function ($post) {
            Post::insert($post);
        });
    }
}
