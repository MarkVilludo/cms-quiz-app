<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMSAuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function postLogin()
    {
        return request()->all();
    }
}
