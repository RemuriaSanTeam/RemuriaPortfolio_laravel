<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return view('profile.show');
        }else{
            return view('top');
        }
    }
}
