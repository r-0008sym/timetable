<?php

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

Route::get('/mypage', 'UserController@show');

Route::get('me', 'UserController@edit')->middleware('auth');
Route::post('me', 'UserController@update')->middleware('auth');

Route::get('/sign_up','UserController@complited');//ユーザー登録完了画面

