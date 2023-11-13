<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class NewCourseController extends Controller
{
    public function __invoke(Request $request)
    {
        $courses = Course::query();

        if($request->query('search')) {

            $search = $request->query('search');

            $courses = Course::whereHas('subcategory', function ($q) use ($search) {
                $q->where('slug', $search);
            });
        }

        return CourseResource::collection($courses->latest()
        ->take(6)
        ->get()
        );

    }
}
