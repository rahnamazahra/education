<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchOfCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, CategoryController, CourseController, CourseDetailsController, NewCourseController, BestTeacherController, YourCourseController, TopCourseController};

Route::get("/", function () {});

Route::get('/home', [HomeController::class,'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/search/{category:slug}', SearchOfCategoryController::class);

Route::get('/courses', CourseController::class)->name('courses.all');

Route::get('/courses/{course:slug}', CourseDetailsController::class)->name('course.view');

Route::get('/new-courses', NewCourseController::class);

Route::get('/best-teachers', BestTeacherController::class);

Route::get('/your-courses', YourCourseController::class);

Route::get('/top-courses', TopCourseController::class);


require __DIR__.'/auth.php';
