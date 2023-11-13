<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewCourseController;
use App\Http\Controllers\TopCourseController;
use App\Http\Controllers\YourCourseController;
use App\Http\Controllers\BestTeacherController;
use App\Http\Controllers\CourseDetailsController;
use App\Http\Controllers\FilterBySubcategoryController;
use App\Http\Controllers\SearchController;

Route::get("/", function () {});

Route::get('/home', [HomeController::class,'index']);

Route::get('/your-courses', [YourCourseController::class, 'latest'])->middleware('auth');

Route::get('/your-courses/all', [YourCourseController::class, 'all'])->middleware('auth');

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/subcategories/filter/{subcategory:slug}', FilterBySubcategoryController::class);

Route::get('/search/category/{search}', [SearchController::class, 'byCategory']);

Route::get('/search/{search}', [SearchController::class, 'index']);

Route::get('/courses', CourseController::class)->name('courses.all');

Route::get('/courses/{course:slug}', CourseDetailsController::class)->name('course.view');

Route::get('/new-courses', NewCourseController::class);

Route::get('/best-teachers', BestTeacherController::class);

Route::get('/top-courses', TopCourseController::class);



require __DIR__.'/auth.php';
