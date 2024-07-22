<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load JSON data from the file
        $json = File::get(path: 'database/json/post.json');
        $post = collect(json_decode($json));

        $post->each(function ($post) {
            post::create([
                'id' => $post->id,
                'title' => $post->title,
                'description' => $post->description,
                'user_id' => $post->user_id
            ]);
        });
    }
}
