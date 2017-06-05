<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Category;
use App\Http\Carousel;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    //列表页渲染
    public function liveList(Request $request)
    {
        //主页分类数据
        $category = new Category;
        $category -> initconfig();
        $data_category = $category ->category_config;
        //轮播图数据
        $carousel = new Carousel;
        $carousel -> initconfig();
        $data_carousel = $carousel ->config;
    	//获取分类id
    	$id = $request ->input('id');
        if (!is_numeric($id)) {
            return view('errors.404');
        }
        //判断是否存在
        if (!array_key_exists($id,$data_category)) {
            return view('errors.found');
        } 
    	//主播数据(房间号、名称、粉丝、封面、)
        $anchors = DB::table('live_anchor') 
	        -> select('live_anchor.user_id','username','fans','live_rend','category_id','anchor_img') 
	        -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
	        -> where('category_id','=',$id)
	        -> orderBy('fans', 'desc')
	        -> get();
		//session
		$user = Session::get('username');
		$use = json_encode($user);
		$arr_user = json_decode($use,true); 
		$arr_user = array_reverse($arr_user,true);

	    //渲染页面、传输数据
    	return view('home.list',['data' => $anchors ,'carousel' => $data_carousel,'category' => $data_category ,'id' => $id,'user' =>  $arr_user[0]]);
    }
}
