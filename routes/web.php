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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => ['auth']], function() {
    // define your route, route groups here

Route::resource('/Post', 'PostController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');






Route::resource('/Comment', 'CommentController');
Route::post('comment/create/{posts}','CommentController@addPostComment')->name('postcomment.store');
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
});
Route::get('/about', function () {
    return view('about');
});
