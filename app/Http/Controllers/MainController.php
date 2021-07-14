<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
        return view('main',[
            "current_time"=>date("Y-m-d H:i:s")
        ]);
        }else{
            return view('top');
        }
    }
}
