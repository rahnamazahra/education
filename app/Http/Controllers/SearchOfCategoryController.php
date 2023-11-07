<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subcategory;

class SearchOfCategoryController extends Controller
{
    public function __invoke(String $categorySlug)
    {
        Subcategory::query()
        ->whereHas('category', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })
        ->get();
    }
}
