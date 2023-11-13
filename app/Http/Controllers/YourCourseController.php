<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;

class YourCourseController extends Controller
{
    public function latest()
    {
        return CourseResource::collection(auth()->user()
        ->courses()
        ->with('teacher')
        ->latest()
        ->take(5)
        ->get());
    }

    public function all()
    {
        return CourseResource::collection(auth()->user()
        ->courses()
        ->with('teacher')
        ->get());
    }
}
