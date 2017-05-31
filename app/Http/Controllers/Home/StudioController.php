<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class StudioController extends Controller
{

   	//直播间渲染
   	public function liveStudio()
    {
   		$data = [];
   		return view('home.studio',['data'=>$data]);
   	}
   	public function live()
   	{
        //获取session
        if(Session::has('username')){
            echo '111';
        }else{
            echo '222';die;
        }

        //获取主播id
        $user_id = Input::get('id');
        //查询主播信息
        $anchors = DB::table('live_anchor') 
          -> select('live_anchor.user_id','username','fans','live_rend','category_id','anchor_img') 
          -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
          -> where('live_anchor.user_id','=',$user_id)
          -> get();
        if ($anchors) {
            foreach ($anchors as $key => $value) {
                $author['id'] = $value -> live_rend;
                $author['username'] = $value -> username;
                $author['user_id'] = $value -> user_id;
                $author['user_img'] = $value -> anchor_img;
            }
        } else { 
//            $url = trim($_SERVER['SCRIPT_NAME'],'index.php');
//            $url = $_SERVER['HTTP_HOST'].$url.'index/index';
//            var_dump($url);return;
//            echo '<script>alert("未找到相关信息,将返回首页");</script>';
//            $arr_url = array('url'=>"{{url('index/index')}}",'urlname'=>'返回首页');
            return view('errors.404');
        }
        /* = [
            'id' => 'test',
            'username' => '苞米地的秘密',
            'user_id' => '1',
            'user_img' => '1.jpg',
        ];*/
   		return view('home.live',$author);
   	}

}
