<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';
