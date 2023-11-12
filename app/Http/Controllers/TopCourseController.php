<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Http\Resources\YourCourseResource;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class YourCourseController extends Controller
{
    public function __invoke()
    {
        return YourCourseResource::collection(auth()->user()->courses);
    }
}
