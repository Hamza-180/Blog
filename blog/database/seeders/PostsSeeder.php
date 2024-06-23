<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'eerste post',
                'description' => 'hier is de descirption van het eerste post.',
                'image' => 'images/img-1.png',
                'name' => 'Auteur van eerste post',
                'user_id' => 1, // Assurez-vous que l'utilisateur avec l'ID 1 existe
                'post_status' => 'published',
                'usertype' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'tweede post',
                'description' => 'hier is de descirption van het tweede post.',
                'image' => 'images/img-2.png',
                'name' => 'Auteur van tweede post',
                'user_id' => 2, // Assurez-vous que l'utilisateur avec l'ID 2 existe
                'post_status' => 'draft',
                'usertype' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
