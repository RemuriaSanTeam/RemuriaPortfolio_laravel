<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostEntry;

class PostEntryController extends Controller
{
    //
    function index(){
        //投稿一覧画面を表示
        dd(PostEntry::all());
    }
    function create(){
        //投稿処理を行う
        echo "create";
    }
}
