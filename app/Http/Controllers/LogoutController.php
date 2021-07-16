<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return view('logout');
        }else{
            return view('top');
        }
    }
}
