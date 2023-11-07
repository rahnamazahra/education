<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
   public function run(): void
    {
        Subcategory::insert( [
            ['name' => 'subcategory 1', 'slug' => 'subcategory-1', 'category_id'=> '1'],
            ['name' => 'subcategory 2', 'slug' => 'subcategory-2', 'category_id'=> '3'],
            ['name' => 'subcategory 3', 'slug' => 'subcategory-3', 'category_id'=> '3'],
            ['name' => 'subcategory 4', 'slug' => 'subcategory-4', 'category_id'=> '5'],
            ['name' => 'subcategory 5', 'slug' => 'subcategory-5', 'category_id'=> '3'],
        ]);

    }
}
