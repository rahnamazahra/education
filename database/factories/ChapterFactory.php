<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapter>
 */
class ChapterFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
        ];
    }
}
