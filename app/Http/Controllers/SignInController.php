<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    //
    public function show(){
        return view('auth.register');
    }
}
