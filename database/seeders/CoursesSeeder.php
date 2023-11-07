<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    public function run(): void
    {
        Course::insert( [
            ['name' => 'course 1', 'slug' => 'course-1', 'level' => 'Beginner', 'price' => 125000, 'discount' => 10, 'language' => 'fa', 'description' => 'descriptio of course. description of course.', 'teacher_id' => 1, 'subcategory_id'=> '1'],
            ['name' => 'course 2', 'slug' => 'course-2', 'level' => 'Beginner', 'price' => 125000, 'discount' => 10, 'language' => 'fa', 'description' => 'descriptio of course. description of course.', 'teacher_id' => 1, 'subcategory_id'=> '1'],
            ['name' => 'course 3', 'slug' => 'course-3', 'level' => 'Beginner', 'price' => 125000, 'discount' => 10, 'language' => 'fa', 'description' => 'descriptio of course. description of course.', 'teacher_id' => 1, 'subcategory_id'=> '2'],
            ['name' => 'course 4', 'slug' => 'course-4', 'level' => 'Beginner', 'price' => 125000, 'discount' => 10, 'language' => 'fa', 'description' => 'descriptio of course. description of course.', 'teacher_id' => 1, 'subcategory_id'=> '5'],
            ['name' => 'course 5', 'slug' => 'course-5', 'level' => 'Beginner', 'price' => 125000, 'discount' => 10, 'language' => 'fa', 'description' => 'descriptio of course. description of course.', 'teacher_id' => 1, 'subcategory_id'=> '1'],
        ]);

    }
}
