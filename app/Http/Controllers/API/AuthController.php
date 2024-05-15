<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function register(Request $request)
    {
        return "register";
    }

    public function login(Request $request)
    {
        return "login";
    }

    public function logout(Request $request)
    {
        return "logout";
    }

    public function me(Request $request)
    {
        return "me";
    }
}
