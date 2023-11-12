<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseDetailsResource;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    public function __invoke(Course $course)
    {
        return new CourseDetailsResource($course);
    }
}
