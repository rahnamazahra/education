<?php

namespace Database\Factories;

use App\Enum\CourseLevelEnum;
use App\Models\Course;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'level' => $this->faker->randomElement(CourseLevelEnum::cases())->value,
            'price' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'discount' => $this->faker->numberBetween(1, 30),
            'language' => "fa",
            'description' => $this->faker->sentence,
            'banner' => $this->faker->imageUrl($width = 200, $height = 200),
            'teacher_id' => fake()->randomElement(User::whereRole('teacher')->pluck('id'))
        ];
    }
}
