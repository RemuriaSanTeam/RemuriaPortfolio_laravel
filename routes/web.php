<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('top');
});
*/
/*
Route::get('/', 'App\Http\Controllers\TopController@show'); //完全パスを通さなければならない
Route::get('/main', 'App\Http\Controllers\MainController@show');
Route::get('/story', 'App\Http\Controllers\StoryController@show');
Route::get('/profile', 'App\Http\Controllers\ProfileController@show');
Route::get('/setting', 'App\Http\Controllers\SettingController@show');
Route::get('/login', 'App\Http\Controllers\LoginController@show');
Route::get('/logout', 'App\Http\Controllers\LogoutController@show');
Route::get('/signin', 'App\Http\Controllers\SignInController@show');
*/
Route::get('/', "App\Http\Controllers\PostEntryController@index");
Route::post('/create', "App\Http\Controllers\PostEntryController@create");