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

Route::get('/user', 'UserController@index');


#自作で追加したもの
Route::get('/home', function(){
    return view('home');
});


Route::get('/bbs', 'BbsController@index');

Route::post('/bbs', 'BbsController@create');


Route::get('github', 'Github\GithubController@top');

Route::post('github/issue', 'Github\GithubController@createIssue');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');

Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
