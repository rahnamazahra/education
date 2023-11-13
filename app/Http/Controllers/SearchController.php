<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Models\Course;

class SearchController extends Controller
{
    public function byCategory($search)
    {
        return CourseResource::collection(Course::searchByCategory($search)->get());
    }

    public function index($search)
    {
        return CourseResource::collection(Course::search($search)->get());
    }
}
