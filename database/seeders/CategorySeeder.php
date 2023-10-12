<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Category 1']);
        Category::create(['name' => 'Category 2']);
        Category::create(['name' => 'Category 3']);
        Category::create(['name' => 'Category 4']);
        Category::create(['name' => 'Category 5']);
        Category::create(['name' => 'Category 6']);
        Category::create(['name' => 'Category 7']);
        Category::create(['name' => 'Category 8']);
        Category::create(['name' => 'Category 9']);
        Category::create(['name' => 'Category 10']);
        Category::create(['name' => 'Category 11']);
        Category::create(['name' => 'Category 12']);
        Category::create(['name' => 'Category 13']);
        Category::create(['name' => 'Category 14']);
        Category::create(['name' => 'Category 15']);
        Category::create(['name' => 'Category 16']);
        Category::create(['name' => 'Category 17']);
    }
}
