<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostEntry;

class PostEntryController extends Controller
{
    //
    function index(){
        //投稿一覧画面を表示
        //ddでDBの中身確認したいときはmysqlを開いた状態にする(当たり前)
        //ddはデバック用
        //dd(PostEntry::all());
        $item_list=PostEntry::all();
        return view("main",[
            "item_list"=> $item_list
        ]);
    }
    function create(Request $request){
        //投稿処理を行う
        $input=$request->only('author','title','body');
        //dd($input);
        $entry=new PostEntry();
        $entry->author=$input["author"];
        $entry->title=$input["title"];
        $entry->image=$input["image"];
        $entry->body=$input["body"];
        $entry->save();

        return redirect('/');
    }
}
