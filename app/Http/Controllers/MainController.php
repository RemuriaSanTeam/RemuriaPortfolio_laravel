<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function show(){
        return view('main',[
            "current_time"=>date("Y-m-d H:i:s")
        ]);
    }
}
