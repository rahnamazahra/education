<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class NewCourseController extends Controller
{
    public function __invoke(Request $request)
    {
        return CourseResource::collection(Course::latest()
            ->take(6)
            ->get()
        );
    }
}
