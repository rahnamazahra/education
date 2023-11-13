<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Category;

class SearchCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        return CourseResource::collection($category->courses());
    }
}
