<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subcategory;


class SubcategoryController extends Controller
{
    public function __invoke()
    {
        return Subcategory::with('courses')->get();
    }
}
