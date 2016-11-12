
<?php

use App\Comment;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/status', function () {
	$comments=Comment::where('approve','1')->get();
    return view('front')->with('comments',$comments);
});

Route::post('/comment','CommentsController@store');
Route::post('/toggle-approve','CommentsController@approval');

Route::get('/dash',function(){
	$comments=Comment::orderBy('created_at','desc')->get();
    return view('dashboard')->with('comments',$comments);

});