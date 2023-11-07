<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            ['name' => 'User 1', 'username' => 'username1', 'password' => '$2y$10$FFlT9JHfLpTG5ch2BpXnh.rgtAcmaPgC8diQg8aeuCz8ewCH8hn2m', 'mobile' => '09306756076', 'profile_image' => 'profile/user1.jpg', 'role' => 'guest'],
            ['name' => 'User 2', 'username' => 'username2', 'password' => '$2y$10$FFlT9JHfLpTG5ch2BpXnh.rgtAcmaPgC8diQg8aeuCz8ewCH8hn2m', 'mobile' => '09306756071', 'profile_image' => 'profile/user1.jpg', 'role' => 'teacher'],
            ['name' => 'User 3', 'username' => 'username3', 'password' => '$2y$10$FFlT9JHfLpTG5ch2BpXnh.rgtAcmaPgC8diQg8aeuCz8ewCH8hn2m', 'mobile' => '09306756072', 'profile_image' => 'profile/user1.jpg', 'role' => 'guest'],
            ['name' => 'User 4', 'username' => 'username4', 'password' => '$2y$10$FFlT9JHfLpTG5ch2BpXnh.rgtAcmaPgC8diQg8aeuCz8ewCH8hn2m', 'mobile' => '09306756073', 'profile_image' => 'profile/user1.jpg', 'role' => 'teacher'],
            ['name' => 'User 5', 'username' => 'username5', 'password' => '$2y$10$FFlT9JHfLpTG5ch2BpXnh.rgtAcmaPgC8diQg8aeuCz8ewCH8hn2m', 'mobile' => '09306756074', 'profile_image' => 'profile/user1.jpg', 'role' => 'guest'],
        ]);

    }


}
