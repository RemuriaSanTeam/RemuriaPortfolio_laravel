<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostEntry;
use Validator;
use Auth;
use Illuminate\Support\Facades\Gate;

class PostEntryController extends Controller
{
    //
    
    function index(){
        //投稿一覧画面を表示
        //dd(PostEntry::all());
        //$item_list=PostEntry::orderBy("id","desc")->paginate(10);//pageinate:ページングの指定
        $item_list = PostEntry::all();
        return view("post",[
            "item_list"=> $item_list
        ]);
    }

    function create(Request $request){
        //投稿処理を行う
        $input=$request->only('author','title','image','body','user_id');

        //投稿者レコードにユーザー名を代入する
        $input['author']=Auth::user()->name;
        $input['user_id']=Auth::user()->id;

        $validator=Validator::make($input,[
            'author'=>'required|string|max:30',
            'title'=>'required|string|max:30',
            'image'=>'required|file|image',
            'body'=>'required|string|max:100',
            'user_id'=>'required'
        ]);

        //バリデーション失敗
        if($validator->fails()){
            return redirect('/')
            ->withErrors($validator);
        }

        if(request('image')){
            $filename=request()->file('image')->getClientOriginalName();
            $input['image']=request('image')->storeAs('public/image',$filename);
        }

        //バリデーション成功
        //dd($input);
        $entry=new PostEntry();
        $entry->author=$input['author'];
        $entry->title=$input['title'];
        $entry->image=$input['image'];
        $entry->body=$input['body'];
        $entry->user_id=$input['user_id'];
        $entry->save();

        return redirect('/post');
    }
    public function destroy($id){
        $item_list=PostEntry::find($id);
        if(auth()-user()->id!=$item_list->user_id){
        return redirect(route('post.index'))->with('error','許可してないけど');
        }
    
        $item_list->delete();
        return redirect(route('post.index'))->with('success','消したよ');
    }
}
