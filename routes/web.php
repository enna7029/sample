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

//Home模块
Route::namespace('Home')->group(function(){
	//首页
	Route::get('/','IndexController@index');
});

//auth
Route::namespace('Auth')->prefix('auth')->name('auth.')->group(function(){
    //后台登录
    Route::prefix('admin')->group(function(){
        Route::post('login','AdminController@login');
    });
});

// 后台登录页面
Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::redirect('/', url('admin/login/index'));
    Route::prefix('login')->group(function () {
        // 登录页面
        Route::get('index', 'LoginController@index')->middleware('admin.login');
        // 退出
        Route::get('logout', 'LoginController@logout');
    });
});

//Admin模块
Route::namespace('Admin')->prefix('admin')->middleware('admin.auth')->group(function(){
    //首页控制器
    Route::prefix('index')->group(function(){
       //后台首页
        Route::get('index','IndexController@index');
    });
});


