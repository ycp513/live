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
    //直播间
    Route::get('/list/livelist', 'ListController@liveList');
});
//Personal
Route::get('per/{action}', function(App\Http\Controllers\Home\PersonalController $index, $action){
    return $index->$action();
});

//Personal
Route::get('liveroom/{action}', function(App\Http\Controllers\Home\StudioController $index, $action){
    return $index->$action();
});
//短信接口
Route::group(['middleware' => ['web']], function()
{

});
Route::get('/getSms','Home\PersonalController@getSms');
Route::get('/getCode','Home\PersonalController@getCode');
//修改用户信息
Route::get('/upUser','Home\PersonalController@upUser');
//添加主播
Route::post('addAnchor','Home\PersonalController@addAnchor');


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
//支付宝支付处理路由
Route::get('alipay/alipay','Home\alipayController@Alipay');  // 发起支付请求
Route::any('alipay/notify','Home\alipayController@AliPayNotify'); //服务器异步通知页面路径
Route::any('alipay/return','Home\alipayController@AliPayReturn');  //页面跳转同步通知页面路径