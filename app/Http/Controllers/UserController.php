<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke()
    {
        return new UserResource(auth()->user());
    }
}
