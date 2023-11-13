<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Chapter;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Subcategory;
use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::factory(1000)->create();
        $this->call(CategorySeeder::class);
        Course::factory(10)->has(Subcategory::factory()->count(3))->create();
        Chapter::factory(10)->has(Course::factory()->count(3))->create();
        Lesson::factory(10)->has(Chapter::factory()->count(3))->create();
    }
}
