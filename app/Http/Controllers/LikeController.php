<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LikeController extends Controller
{
    public function store($postId){
        Auth::user()->like($postId);
        return 'ok!';//レスポンス内容
    }
    public function destroy($postId){
        Auth::user()->unlike($postId);
        return 'ok!';//レスポンス内容
    }
}
