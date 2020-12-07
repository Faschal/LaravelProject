<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login'); 
    }

    public function login(Request $request) 
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        return 'Email : '.$email. ' Password : '.Hash::make($password);
    }
}
