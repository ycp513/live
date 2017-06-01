<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Category;
use App\Http\Carousel;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //主页渲染
    public function index()
    {
        //主页分类数据
        $category = new Category;
        $category -> initconfig();
        $data_category = $category ->config;
        //轮播图
        $carousel = new Carousel;
        $carousel -> initconfig();
        $data_carousel = $carousel ->config;
        //主播数据(房间号、名称、粉丝、封面、)
        $anchors = DB::table('live_anchor') 
	        -> select('live_anchor.user_id','username','fans','live_rend','category_id','anchor_img') 
	        -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
	        -> orderBy('fans', 'desc')
	        -> get();
        if ($anchors) {
            //数据处理
            foreach ($data_category as $key => $value) {
                foreach ($anchors as $k => $val) {
                    if ($val -> category_id == $key ) {
                        $detailed[$key][] = $val;
                    }                   
                }           
            }
            $detailed['success'] = 1;
        }else {
            $detailed['success'] = 0;
            $detailed['mess'] = '尚未有主播加入，敬请期待！';
        }

        //渲染主页、赋值
    	return view('home.index',['carousel' => $data_carousel , 'category' => $data_category ,'detailed' => $detailed ,'anchors' => $anchors]);
    }

    //搜索详情页
    public function search(Request $request)
    {
        //主页分类数据
        $category = new Category;
        $category -> initconfig();
        $data_category = $category ->config;

        $data = $request ->all();
        $user = $data['user'];
        $anchors = DB::table('live_anchor') 
          -> select('live_anchor.user_id','username','fans','live_rend','category_id','anchor_img') 
          -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
          -> where('live_anchor.user_id','like','%'.$user.'%')
          -> orwhere('live_rend','like','%'.$user.'%')
          -> orwhere('username','like','%'.$user.'%')
          -> get();
        if (empty($anchors)) { 
            return view('errors.found');
        }
        return view('home.search',['category'=>$data_category,'data' => $anchors]);
    }

}