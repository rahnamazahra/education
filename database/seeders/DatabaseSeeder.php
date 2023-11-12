<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(ChapterSeeder::class);
        $this->call(LessonSeeder::class);

        // $courses = Course::all();
        // User::all()->each(function ($user) use ($courses) {
        //     $user->courses()->attach(
        //         $courses->random(rand(1, 3))->pluck('id')->toArray()
        //     );
        // });
    }
}
