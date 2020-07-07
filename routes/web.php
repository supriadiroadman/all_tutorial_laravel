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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'PostController@admin')->name('admin');
Route::get('/manager', 'PostController@manager')->name('manager');
Route::get('/user', 'PostController@user')->name('user');
Route::get('/others', 'PostController@others')->name('others');


Route::get('/posts/admin', 'PostController@postAdmin')->middleware('can:isAdmin')->name('post.admin');
Route::get('/posts/manager', 'PostController@postManager')->middleware('can:isManager')->name('post.manager');
Route::get('/posts/user', 'PostController@postUser')->middleware('can:isUser')->name('post.user');
Route::get('/posts/others', 'PostController@postOthers')->name('post.others');
