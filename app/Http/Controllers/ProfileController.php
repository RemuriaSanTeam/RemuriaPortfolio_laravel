<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show(){
    if(Auth::check()){
        return view('profile');
    }else{
        return view('top');
    }
    }
}
