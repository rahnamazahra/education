<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, CategoryController, SearchOfCategoryController};


Route::get('/users', [UserController::class, 'index']);

Route::post('/categories', [CategoryController::class, 'index']);

Route::get('/search/category/{slug}', SearchOfCategoryController::class);
