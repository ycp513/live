<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Category;

class IndexController extends Controller
{

    //主页渲染
    public function index()
    {
        $category = new Category();
//        $arr = [
//            '7' => '天天向上',
//        ];
//        $category -> write($arr);
        $category ->initconfig();
        $cate = $category->category_config;
        //var_dump($cate);die;
        //主页分类数据
//        $app_path = app_path();
//        include $app_path.'/category.php';
        
        //主播数据(房间号、名称、粉丝、封面、)
        $anchors = DB::table('live_anchor') 
	        -> select('live_anchor.user_id','username','fans','live_rend','category_id','anchor_img') 
	        -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
	        -> orderBy('fans', 'desc')
	        -> get();
        if ($anchors) {
            //数据处理
            foreach ($cate as $key => $value) {
                foreach ($anchors as $k => $val) {
                    if ($val -> category_id == $key ) {
                        $detailed[$key][] = $val;
                    }                   
                }           
            }
            //var_dump($detailed);die;
            $detailed['success'] = 1;
        }else {
            $detailed['success'] = 0;
            $detailed['mess'] = '尚未有主播加入，敬请期待！';
        }

        //渲染主页、赋值
    	return view('home.index',['category' => $cate ,'detailed' => $detailed ,'anchors' => $anchors]);
    }

    //分类详情页
    public function cate(Request $request)
    {
        $cate_id = $request ->input('id');
        print_r($cate_id);
    }

    //搜索详情页
    public function search(Request $request)
    {
        $data = $request ->all();
        echo '<pre>';
        print_r($data);
    }

}