<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => 'username',
            'password' => '$2y$04$IQg0BXZHNtK6X8FCz57q5ex/W/F0Nz2TLFxCiqMO3KDKE2BeTVoL6', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's username address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
