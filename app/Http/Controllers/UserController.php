<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $name = 'John Doe';
        $user = array(
            "name" => "Smith John",
            "email" => "smith@gmail.com"
        );

        return view('user', compact('name', 'user'));
    }
}
