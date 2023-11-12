<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->unique()->username,
            'password' => Hash::make('1234567890'),
            'role' => fake()->randomElement(['guest','teacher']),
            'job' => fake()->jobTitle,
            'avatar' => 'avatar/pic1.jpg',

        ];
    }

}
