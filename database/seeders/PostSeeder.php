<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Post 1',
            'content' => 'Content for post 1',
            'category_id' => 1,
            'author_id' => 1,
        ]);
        Post::create([
            'title' => 'Post 2',
            'content' => 'Content for post 2',
            'category_id' => 2,
            'author_id' => 5,
        ]);
        Post::create([
            'title' => 'Post 3',
            'content' => 'Content for post 3',
            'category_id' => 6,
            'author_id' => 3,
        ]);
        Post::create([
            'title' => 'Post 4',
            'content' => 'Content for post 4',
            'category_id' => 2,
            'author_id' => 5,
        ]);
        Post::create([
            'title' => 'Post 5',
            'content' => 'Content for post 5',
            'category_id' => 1,
            'author_id' => 3,
        ]);
        Post::create([
            'title' => 'Post 6',
            'content' => 'Content for post 6',
            'category_id' => 12,
            'author_id' => 2,
        ]);
        Post::create([
            'title' => 'Post 7',
            'content' => 'Content for post 7',
            'category_id' => 6,
            'author_id' => 5,
        ]);
        Post::create([
            'title' => 'Post 8',
            'content' => 'Content for post 8',
            'category_id' => 1,
            'author_id' => 1,
        ]);
        Post::create([
            'title' => 'Post 9',
            'content' => 'Content for post 9',
            'category_id' => 2,
            'author_id' => 3,
        ]);
        Post::create([
            'title' => 'Post 10',
            'content' => 'Content for post 10',
            'category_id' => 4,
            'author_id' => 5,
        ]);
        Post::create([
            'title' => 'Post 323512',
            'content' => 'Content for post 146',
            'category_id' => 12,
            'author_id' => 8,
        ]);
    }
}
