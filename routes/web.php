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
use App\Http\Controllers\SearchCategoryController;

Route::get("/", function () {});

Route::get('/home', [HomeController::class,'index']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/search/{category:slug}', SearchCategoryController::class);

Route::get('/courses', CourseController::class)->name('courses.all');

Route::get('/courses/{course:slug}', CourseDetailsController::class)->name('course.view');

Route::get('/new-courses', NewCourseController::class);

Route::get('/best-teachers', BestTeacherController::class);

Route::get('/your-courses', YourCourseController::class);

Route::get('/top-courses', TopCourseController::class);


require __DIR__.'/auth.php';
