<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Code',
            'slug' => 'code',
        ]);
        $category->subcategories()->create([
            'name' => 'Python',
            'slug' => 'python',
        ]);
        $category->subcategories()->create([
            'name' => 'React',
            'slug' => 'react',
        ]);
        $category->subcategories()->create([
            'name' => 'Unity',
            'slug' => 'unity',
        ]);

        $category = Category::create([
            'name' => 'Deisgn',
            'slug' => 'design',
        ]);
        $category->subcategories()->create([
            'name' => 'UI & UX',
            'slug' => 'ui-ux',
        ]);
        $category->subcategories()->create([
            'name' => 'Vector',
            'slug' => 'vector',
        ]);
        $category = Category::create([
            'name' => 'Video',
            'slug' => 'video',
        ]);
        $category->subcategories()->create([
            'name' => 'After Effect',
            'slug' => 'after-effect',
        ]);
        $category->subcategories()->create([
            'name' => 'Lightroom',
            'slug' => 'lightroom',
        ]);
        $category->subcategories()->create([
            'name' => 'Photography',
            'slug' => 'photography',
        ]);
    }


}
