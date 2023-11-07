<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchOfCategoryController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {});

Route::get('/home', [HomeController::class,'index']);

Route::get('/search/category/{slug}', SearchOfCategoryController::class);

require __DIR__.'/auth.php';
