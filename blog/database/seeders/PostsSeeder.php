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
            'title' => 'Premier post',
            'description' => 'Ceci est la description du premier post.',
            'image' => 'image1.jpg',
            'name' => 'Auteur du premier post',
            'user_id' => 1, 
            'post_status' => 'published',
            'usertype' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'title' => 'Deuxième post',
            'description' => 'Ceci est la description du deuxième post.',
            'image' => 'image2.jpg',
            'name' => 'Auteur du deuxième post',
            'user_id' => 2, 
            'post_status' => 'draft',
            'usertype' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ajouter d'autres entrées de post fictives au besoin
    }
}
