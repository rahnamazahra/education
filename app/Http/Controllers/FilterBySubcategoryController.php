<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Subcategory;

class FilterBySubcategoryController extends Controller
{
    public function __invoke(Subcategory $subcategory)
    {
        return CourseResource::collection($subcategory->courses);
    }
}
