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
        // disable forgein key
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@ehb.be',
                'email_verified_at' => now(),
                'password' => Hash::make('Password!321'),
                'usertype' => 'admin',
                'biography' => 'Admin account',
                'birthday' => now()->subYears(30),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'usertype' => 'user',
                'biography' => 'Hello im User1.',
                'birthday' => now()->subYears(21),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'usertype' => 'user',
                'biography' => 'Hello im User2.',
                'birthday' => now()->subYears(22),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // enable foreing key
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
