<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate(); 

        $user = User::factory()->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'Work'
        ]);

        Post::([
            'title' => 'My Family Post',
            'slug' => 'my-hobby-post',
            'excerpt' => 'Excerpt for my post', 
            'body' => 'Lorem ipsum dolar sit amet.'      
            ]);

    }
}
