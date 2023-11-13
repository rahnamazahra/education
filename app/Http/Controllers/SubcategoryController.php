<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Models\Subcategory;


class SubcategoryController extends Controller
{
    public function __invoke()
    {
        return CourseResource::collection(Subcategory::with('courses')->get());
    }
}
