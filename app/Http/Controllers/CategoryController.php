<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __invoke()
    {
        return CategoryResource::collection(Category::with('subcategories')->get());
    }
}
