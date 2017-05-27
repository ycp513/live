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

//error
Route::get('/error',function(){
   abort(404);
});
