<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    //列表页渲染
    public function liveList(Request $request)
    {
        //主页分类数据
        $app_path = app_path();
        include $app_path.'/category.php';

    	//获取分类id
    	$id = $request ->input('id');
    	//主播数据(房间号、名称、粉丝、封面、)
        $anchors = DB::table('live_anchor') 
	        -> select('live_anchor.user_id','username','fans','live_rend','category_id','anchor_img') 
	        -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
	        -> where('category_id','=',$id)
	        -> orderBy('fans', 'desc')
	        -> get();

	    //渲染页面、传输数据
    	return view('home.list',['data' => $anchors ,'category' => $data_category ,'id' => $id]);
    }
}
