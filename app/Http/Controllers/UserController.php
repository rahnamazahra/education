<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function __invoke()
    {
        return new UserResource(auth()->user());
    }
}
