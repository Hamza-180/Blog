<?php

// database/seeders/PostsSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('posts')->insert([
            'title' => 'eerste post',
            'description' => 'hier is de descirption van het eerste post.',
            'image' => 'image1.jpg',
            'name' => 'Auteur van eerste post',
            'user_id' => 1, 
            'post_status' => 'published',
            'usertype' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'title' => 'tweede post',
            'description' => 'hier is de descirption van het tweede post .',
            'image' => 'image2.jpg',
            'name' => 'Auteur van tweede post',
            'user_id' => 2, 
            'post_status' => 'draft',
            'usertype' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ajouter d'autres entrées de post fictives au besoin
    }
}
