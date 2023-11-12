<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __invoke()
    {
        // todo select the best by some criteria
        return User::whereRole('teacher')->take(6)->get();
    }
}
