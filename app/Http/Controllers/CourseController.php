<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;

class CourseController extends Controller
{
    public function __invoke()
    {
        return CourseResource::collection(Course:: get());
    }

}
