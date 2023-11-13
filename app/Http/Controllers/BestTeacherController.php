<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class BestTeacherController extends Controller
{
    public function __invoke()
    {
        // todo select the best by some criteria
        return UserResource::collection(User::whereRole('teacher')
            ->take(6)
            ->get()
        );
    }
}
