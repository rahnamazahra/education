<?php

namespace Database\Factories;

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
            'name' => $this->faker->name,
            'slug' => Str::slug($this->faker->slug),
            'level' => 'begginer',
            "price" => 100000,
            "discount" => 10,
            "language" => "fa",
            "description" => $this->faker->sentence(5),
            'banner'  => 'course/pic1.jpg',
            'teacher_id' => $this->faker->randomElement(User::where('role', 'teacher')->get())['id'],
            'subcategory_id' => $this->faker->randomElement(Subcategory::all())['id'],
        ];
    }
}
