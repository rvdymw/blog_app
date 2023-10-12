<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['first_name' => 'John', 'last_name' => 'Doe', 'bio' => 'Author 1 bio']);
        Author::create(['first_name' => 'Jan', 'last_name' => 'Kowalski', 'bio' => 'Author 2 bio']);
        Author::create(['first_name' => 'Alice', 'last_name' => 'Johnson', 'bio' => 'Author 4 bio']);
        Author::create(['first_name' => 'Anna', 'last_name' => 'Nowak', 'bio' => 'Author 5 bio']);
        Author::create(['first_name' => 'Bill', 'last_name' => 'Johnson', 'bio' => 'Author 6 bio']);
        Author::create(['first_name' => 'Cindy', 'last_name' => 'Moore', 'bio' => 'Author 7 bio']);
        Author::create(['first_name' => 'Maciej', 'last_name' => 'John', 'bio' => 'Author 8 bio']);
        Author::create(['first_name' => 'Hanna', 'last_name' => 'Son', 'bio' => 'Author 9 bio']);
        Author::create(['first_name' => 'Janina', 'last_name' => 'Dusk', 'bio' => 'Author 10 bio']);
        Author::create(['first_name' => 'Bartosz', 'last_name' => 'Bartłomiej', 'bio' => 'Author 11 bio']);
        Author::create(['first_name' => 'Bartłomiej', 'last_name' => 'Bartosz', 'bio' => 'Author 12 bio']);
        Author::create(['first_name' => 'Test', 'last_name' => 'Testowy', 'bio' => 'Author 13 bio']);
        Author::create(['first_name' => 'test', 'last_name' => 'Testowy', 'bio' => 'Author 14 bio']);
        Author::create(['first_name' => 'test', 'last_name' => 'test', 'bio' => 'Author 15 bio']);
        Author::create(['first_name' => 'test', 'last_name' => 'test', 'bio' => 'Author 16 bio']);
        Author::create(['first_name' => 'test', 'last_name' => 'test', 'bio' => 'Author 17 bio']);
    }
}
