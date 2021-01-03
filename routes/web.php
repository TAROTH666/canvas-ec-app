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

/*
|--------------------------------------------------------------------------
| ユーザ登録機能
|--------------------------------------------------------------------------
*/

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

/*
|--------------------------------------------------------------------------
| ログイン機能
|--------------------------------------------------------------------------
*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

/*
|--------------------------------------------------------------------------
| ルートディレクトリへのアクセス時
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
});

/*
|--------------------------------------------------------------------------
| ユーザ情報一覧
|--------------------------------------------------------------------------
*/
Route::get('/user_info', 'UserInfoController@show')->name('user_info');

/*
|--------------------------------------------------------------------------
| ユーザ情報編集
|--------------------------------------------------------------------------
*/
Route::get('/user_edit', 'UserEditController@edit')->name('user_edit');
Route::put('/user_update', 'UserEditController@update')->name('user_update');

/*
|--------------------------------------------------------------------------
| ユーザ情報削除
|--------------------------------------------------------------------------
*/
Route::get('/delete', 'UserDeleteController@show')->name('user_delete');
Route::post('/remove', 'UserDeleteController@remove')->name('user_remove');


