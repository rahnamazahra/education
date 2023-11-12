<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class NewCourseController extends Controller
{
    public function __invoke()
    {
        return CourseResource::collection(Course::query()
            ->latest()
            ->take(6)
            ->get());
    }
}
