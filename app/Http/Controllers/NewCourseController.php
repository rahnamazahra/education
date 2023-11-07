<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class NewCourseController extends Controller
{
    public function __invoke(string $slug)
    {
        return Course::query()
            ->whereHas('subcategory', fn ($q) => $q->where('slug', $slug))
            ->orderBy('careated_at', 'DESC')
            ->take(6)
            ->get();
    }
}
