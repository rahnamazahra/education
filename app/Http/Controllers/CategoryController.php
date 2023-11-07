<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;

class CategoryController extends Controller
{
    public function __invok()
    {
        return Category::all();
    }
}
