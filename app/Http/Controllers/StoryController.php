<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StoryController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return view('story');
        }else{
            return view('top');
        }
    }
}
