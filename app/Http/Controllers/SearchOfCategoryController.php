<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Category;
use App\Models\Course;
use App\Models\Subcategory;

class SearchOfCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        return CourseResource::collection($category->courses()->get());
    }
}
