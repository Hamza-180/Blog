<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersSeeder extends Seeder
{
    public function run()
    {
        $email = 'user_' . Str::random(5) . 'user@gmail.com';
        DB::table('users')->insert([
            'name' => 'user',
            'email' => ('user@gmail.com'),
            'email_verified_at' => now(),
            'password' => Hash::make('user1234'),
            'usertype' => 'user',
            'biography' => 'Hello im Hamza.', 
            'birthday' => now()->subYears(21), 
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more user entries as needed
    }
}
