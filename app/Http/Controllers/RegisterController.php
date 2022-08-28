<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register', [
            "title" => "Register",
            "active" => "register"
        ]);
    }
}
