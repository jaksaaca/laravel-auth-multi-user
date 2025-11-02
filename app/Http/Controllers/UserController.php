<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index() 
    {
        return view('login');
    }

    function login(Request $request) 
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
       ]);

       $infologin = [
            'email' => $request->email,
            'password' => $request->password,
       ];

       if (Auth::attempt($infologin)) {
            echo "succces";
            exit();
        } else {
            return redirect('')->withErrors('Login Failed')->withInput();
       }
    }
}
