<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostEntryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/welcome', function () {
    return view('welcome');
});

/*
Route::get('/', function () {
    return view('top');
});
*/

//各画面のルーティング
Route::get('/', 'App\Http\Controllers\TopController@show'); //完全パスを通さなければならない
Route::get('/main', 'App\Http\Controllers\MainController@show');
Route::get('/story', 'App\Http\Controllers\StoryController@show');
Route::get('/profile', 'App\Http\Controllers\ProfileController@show');
Route::get('/setting', 'App\Http\Controllers\SettingController@show');
//Route::get('/login', 'App\Http\Controllers\LoginController@show');
Route::get('/logout', 'App\Http\Controllers\LogoutController@show');
Route::get('/signin', 'App\Http\Controllers\SignInController@show');

//投稿のCRADのルーティング
Route::get('/post', [PostEntryController::class,'index'])->name('index');//標準的なlaravel8のルートの通し方
Route::post('/create', [PostEntryController::class,'create'])->name('create');
Route::get('/delete',[PostEntryController::class,'delete'])->name('delete');//削除警告
Route::post('/remove',[PostEntryController::class,'remove'])->name('remove');//削除
Route::get('/edit',[PostEntryController::class,'edit'])->name('edit');//編集
Route::post('/update',[PostEntryController::class,'update'])->name('update');//更新
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//いいね機能
Route::post('/like/{postId}',[LikeController::class,'store']);
Route::post('/unlike/{postId}',[LikeController::class,'destroy']);