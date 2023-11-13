<?php

namespace App\Http\Controllers;

use App\Http\Resources\SubcategoryResource;
use App\Models\Subcategory;


class SubcategoryController extends Controller
{
    public function __invoke()
    {
        return SubcategoryResource::collection(Subcategory::all());
    }
}
