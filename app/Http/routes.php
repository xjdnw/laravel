<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//前台路由分组;
Route::group(['namespace'=>'Home'],function(){
    Route::get('/','IndexController@index');
    //Route::get('/user','UserController@index');
    //Route::resource('user','UserController');
});

//后台
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //Route::get('/','IndexController@index');
    Route::get('/',function(){
        echo '我是中文';
    });
    Route::get('/user','UserController@index');
});
