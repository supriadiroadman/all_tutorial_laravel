<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 =  User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // 12345678
            'remember_token' => Str::random(10),
            'role' => 'admin',
        ]);

        $user2 =  User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // 12345678
            'remember_token' => Str::random(10),
            'role' => 'manager',
        ]);

        $user3 =  User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // 12345678
            'remember_token' => Str::random(10),
            'role' => 'user',
        ]);
    }
}
