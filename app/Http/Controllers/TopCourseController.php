<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Http\Resources\TopCourseResource;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class TopCourseController extends Controller
{
    public function __invoke()
    {
        return CourseResource::collection(Course::topCourses());
    }
}
