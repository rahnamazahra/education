<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Code',
            'slug' => 'code',
        ]);
        Course::factory()
            ->count(3)
            ->for($category->subcategories()->create([
                'name' => 'Python',
                'slug' => 'python',
            ]))
            ->has(Chapter::factory(5)->has(Lesson::factory(3)))
            ->create();
        Course::factory()
            ->count(3)
            ->for($category->subcategories()->create([
                'name' => 'React',
                'slug' => 'react',
            ]))
            ->has(Chapter::factory(5)->has(Lesson::factory(3)))
            ->create();
        Course::factory()
            ->count(3)
            ->for($category->subcategories()->create([
                'name' => 'Unity',
                'slug' => 'unity',
            ]))
            ->has(Chapter::factory(5)->has(Lesson::factory(3)))
            ->create();

        $category = Category::create([
            'name' => 'Deisgn',
            'slug' => 'design',
        ]);
        Course::factory()
            ->count(3)
            ->for($category->subcategories()->create([
                'name' => 'UI & UX',
                'slug' => 'ui-ux',
            ]))
            ->has(Chapter::factory(5)->has(Lesson::factory(3)))
            ->create();
        Course::factory()
            ->count(3)
            ->for($category->subcategories()->create([
                'name' => 'Vector',
                'slug' => 'vector',
            ]))
            ->has(Chapter::factory(5)->has(Lesson::factory(3)))
            ->create();

        $category = Category::create([
            'name' => 'Video',
            'slug' => 'video',
        ]);
        Course::factory()
            ->count(3)
            ->for($category->subcategories()->create([
                'name' => 'After Effect',
                'slug' => 'after-effect',
            ]))
            ->has(Chapter::factory(5)->has(Lesson::factory(3)))
            ->create();
        Course::factory()
            ->count(3)
            ->for($category->subcategories()->create([
                'name' => 'Lightroom',
                'slug' => 'lightroom',
            ]))
            ->has(Chapter::factory(5)->has(Lesson::factory(3)))
            ->create();
        Course::factory()
            ->count(3)
            ->for($category->subcategories()->create([
                'name' => 'Photography',
                'slug' => 'photography',
            ]))
            ->has(Chapter::factory(5)->has(Lesson::factory(3)))
            ->create();
    }

}
