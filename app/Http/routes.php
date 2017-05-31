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

Route::get('/', function () {
    return view('welcome');
});


Route::get('index/verify/{tmp}','Home\IndexController@verify');
Route::get('index/getCode','Home\IndexController@getCode');
Route::get('index/sendTemplate','Home\IndexController@sendTemplate');
Route::get('index/telCheck','Home\IndexController@telCheck');
Route::get('index/checkName','Home\IndexController@checkName');

Route::get('index/register','Home\IndexController@register');
Route::get('index/message','Home\IndexController@message');


Route::group(['middleware'=>'web'],function() {
    Route::get('index/index','Home\IndexController@index');//把需要用到session的路由请求全部放在web组里。
     Route::get('index/login','Home\IndexController@login');
});
//index
Route::get('index/{action}', function(App\Http\Controllers\Home\IndexController $index, $action){
    return $index->$action();
});
//list
Route::get('list/{action}', function(App\Http\Controllers\Home\ListController $index, $action){
    return $index->$action();
});
//Personal
Route::get('per/{action}', function(App\Http\Controllers\Home\PersonalController $index, $action){
    return $index->$action();
});

