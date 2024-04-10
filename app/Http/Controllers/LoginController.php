<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this line

class LoginController extends Controller
{
    public function login(Request $request) 
    {
        // return $request->all();
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }
}
