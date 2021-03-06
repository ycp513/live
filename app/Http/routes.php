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
/*Route::get('index/{action}', function(App\Http\Controllers\Home\IndexController $index, $action){
    return $index->$action();
});*/

//index
Route::group( ['namespace' => 'Home'] , function() {
    //直播首页
    Route::get('/index/index', 'IndexController@index');
    //直播详情页
    Route::get('/index/cate', 'IndexController@cate');
    //直播搜索
    Route::post('/index/search' , 'IndexController@search');
});

/*//list
Route::get('list/{action}', function(App\Http\Controllers\Home\ListController $index, $action){
    return $index->$action();
});*/
//list
Route::group( ['namespace' => 'Home'] , function() {
    //列表
    Route::get('/list/livelist', 'ListController@liveList');
	//登陆
	Route::get('/list/login','ListController@login');
	
});
//Personal
Route::get('per/{action}', function(App\Http\Controllers\Home\PersonalController $index, $action){
    return $index->$action();
});

//Personal
Route::get('liveroom/login','Home\StudioController@login');
Route::post('liveroom/guardAdd','Home\StudioController@guardAdd');
Route::get('liveroom/{action}', function(App\Http\Controllers\Home\StudioController $index, $action){
    return $index->$action();
});

//短信接口
Route::group(['middleware' =>'web'], function()
{
    Route::get('/getSms','Home\PersonalController@getSms');
    Route::get('/getCode','Home\PersonalController@getCode');
});

//修改用户信息
Route::get('/upUser','Home\PersonalController@upUser');
//添加主播
Route::post('/addAnchor','Home\PersonalController@addAnchor');



//index
Route::get('index/{action}', function(App\Http\Controllers\Home\IndexController $index, $action){
    return $index->$action();
});
//login
Route::get('login/{action}', function(App\Http\Controllers\Admin\LoginController $index, $action){
    return $index->$action();
});
//list
Route::get('list/{action}', function(App\Http\Controllers\Home\ListController $index, $action){
    return $index->$action();
});
//Personal

//Admin
Route::get('admin/{action}', function(App\Http\Controllers\Admin\AdminController $index, $action){
    return $index->$action();
});

Route::get('admin/empty_page','Admin\AdminController@Empty_Page');
Route::get('admin/adminshow','Admin\AdminController@AdminShow');
Route::post('login/login','Admin\LoginController@login');
Route::post('admin/carousel','Admin\AdminController@Carousel');
