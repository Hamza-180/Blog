<?php

// database/seeders/PersonalAccessTokensSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonalAccessTokensSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('personal_access_tokens')->insert([
            'tokenable_type' => 'App\Models\User', 
            'tokenable_id' => 1, // 
            'name' => 'Token de test pour utilisateur 1',
            'token' => Str::random(64),
            'abilities' => '["read", "write"]',
            'last_used_at' => now(),
            'expires_at' => now()->addDays(7), // Par exemple, expire dans 7 jours
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('personal_access_tokens')->insert([
            'tokenable_type' => 'App\Models\User', 
            'tokenable_id' => 2, 
            'name' => 'Token de test pour utilisateur 2',
            'token' => Str::random(64),
            'abilities' => '["read"]',
            'last_used_at' => null, 
            'expires_at' => now()->addDays(14), 
            'updated_at' => now(),
        ]);

        
    }
}
