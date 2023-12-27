<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PasswordResetTokensSeeder extends Seeder
{
    public function run()
    {
        DB::table('password_reset_tokens')->insert([
            'email' => 'john@example.com',
            'token' => Str::random(60),
            'created_at' => now(),
        ]);

        // Add more password reset token entries as needed
    }
}
