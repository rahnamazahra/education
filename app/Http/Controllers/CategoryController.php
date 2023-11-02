<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends ApiController
{
    public function index()
    {
        return $this->successRespons(200, Category::all());
    }

    public function store(CategoryStoreRequest $request)
    {
        Category::create($request->all());
        return $this->successRespons(201);
    }
}
