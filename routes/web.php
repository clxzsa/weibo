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

//主页
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', 'StaticPagesController@home')->name('home');
//帮助
Route::get('/help', 'StaticPagesController@help')->name('help');
//关于
Route::get('/about', 'StaticPagesController@about')->name('about');

//登录
Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');

//显示登录页面
Route::get('login', 'SessionsController@create')->name('login');
//创建新会话（登录）
Route::post('login', 'SessionsController@store')->name('login');
//销毁会话（退出登录）
Route::delete('logout', 'SessionsController@destroy')->name('logout');
