<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redis;
use App\Http\Category;
use App\Http\Carousel;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{

   public function AdminShow()
    {
////         //echo phpinfo();return;
//        $key='user:2017-05-29';
//        $key1='user:2017-05-30';
//        var_dump(Redis::bitCount($key));
//        var_dump(Redis::bitCount($key1));
    	 if(empty(Session::get('user')))
    	  {
     	  	return redirect()->action('Admin\LoginController@login');
    	  }else{
    	  	return view('admin.index');
    	  }

    	 
    }
    //用户统计
    public function Graph_Metrics()
    {
        $data['register'] = DB::table('live_user')->count();
        $data['direct'] = DB::table('live_live')->count();
    	return view('admin.graph_metrics',['data'=>$data]);
    }
   //主页
    public function Empty_Page()
    {
    	 return view('admin.empty_page');
    }
    //用户充值订单列表
    public function Table()
    {
        $data =  DB::table('live_order')->get();
        foreach($data as $k => $v){
            $username= DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
            $v->username = $username[$v->user_id];
            $v->addtime= date('Y-m-d H:i:s',$v->addtime);
        }
    	return view('admin.table',['data'=>$data]);
    }
  
     //主播体现列表
    public function Anchor_Order()
    {
         $data = DB::table('cash_log')->get();
         foreach($data as $k => $v){
             $username = DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
             $v->username = $username[$v->user_id];
             $v->addtime=date('Y-m-d H:i:s',$v->addtime);
         }
    	 return view('admin.anchor_order',['data'=>$data]);
    }

      //礼物订单
    public function Gift_Order()
    {
        $data=DB::table('user_giff')->get();
        foreach($data as $k => $v){
           $username = DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
            $v->username = $username[$v->user_id];
            $anchor = DB::table('live_user')->where('user_id','=',$v->anchor_id)->lists('username','user_id');
            $v->anchor = $anchor[$v->anchor_id];
            $giftname = DB::table('live_gift')->where('gift_id','=',$v->giff_id)->lists('giftname','gift_id');
            $v->giftname = $giftname[$v->giff_id];
        }
    	return view('admin.gift_order',['data'=>$data]);
    }

       //直播列表
    public function Contacts()
    {
    	 return view('admin.contacts');
    }

       //直播用户状态详情类表
    public function Clients()
    {
        //查询出主播类型
        $category = new Category();
        $category->initconfig();
        $ca = $category->category_config;
        //查询主播状态
        $data = DB::table('live_anchor')->get();
        $res=array();
        $arr=array();
        foreach($data as $k => $v){
           $username = DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
           $v->username = $username[$v->user_id];
            foreach($ca as $k1 => $v1){
                if($v->category_id==$k1){
                    $v->category_id=$v1;
                }
            }
            if($v->commision_status==1){
                $v->commisions='是';
            }else{
                $v->commisions='否';
            }
            if($v->force_status==1){
                $v->force='正常';
                $res[]=$v;
            }else{
                $v->force='封杀';
                $arr[]=$v;
            }
        }
    	 return view('admin.clients',['res'=>$res,'arr'=>$arr]);
    }
   //用户详细
    public function Table_User()
    {
        $data =  DB::table('live_user')->get();
    	 return view('admin.table_user',['data'=>$data]);
    }
    //直播记录
    public function Live_Recording()
    {
       $data =  DB::table('live_live')->get();
        foreach($data as $k => $v){
          $username =  DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
            if($username){
                $v->username = $username[$v->user_id];
            }else{
                $v->username = '';
            }
        }
    	 return view('admin.live_recording',['data'=>$data]);
    }

    public  function  Update_Status(){
       //$force_status = Input::get('force_status');
       $user_id = Input::get('user_id');
       $arr = DB::table('live_anchor')->where('user_id',$user_id)->first();
        if($arr->force_status==1){
            $bool=DB::table("live_anchor")->where('user_id',$user_id)->update(['force_status'=>0]);
            return 0;
        }else{
            $bool=DB::table("live_anchor")->where('user_id',$user_id)->update(['force_status'=>1]);
            return 1;
        }
    }

    public  function  Update_Commision(){
        $user_id = Input::get('user_id');
        $arr = DB::table('live_anchor')->where('user_id',$user_id)->first();
        if($arr->commision_status==1){
            $bool=DB::table("live_anchor")->where('user_id',$user_id)->update(['commision_status'=>0]);
            return 0;
        }else{
            $bool=DB::table("live_anchor")->where('user_id',$user_id)->update(['commision_status'=>1]);
            return 1;
        }
    }
    //根据房间号查询主播
    public  function Search_Anchor(){
        $category = new Category();
        $category->initconfig();
        $ca = $category->category_config;
        $text = Input::get('text');
        $res = DB::select("select * from live_anchor where live_rend='$text'");
        foreach($res as $k => $v){
            $username = DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
            $v->username = $username[$v->user_id];
            foreach($ca as $k1 => $v1){
                if($v->category_id==$k1){
                    $v->category_id=$v1;
                }
            }
            if($v->commision_status==1){
                $v->commisions='是';
            }else{
                $v->commisions='否';
            }
            if($v->force_status==1){
                $v->force='正常';
            }else{
                $v->force='封杀';
            }
        }
        return $res;
    }

    //前台轮播图展示设置
    public function Carousel()
    {
        if ($_POST) { 
            $data_file = input::file('file'); 
            $data = input::get();
            array_shift($data);
            $filePath = $this->deal_img($data_file);
            $data['img_url'] = $filePath;
            foreach ($data as $key => $value) {
                foreach ($value as $k => $val) {
                   $arr[$k][$key] = $val;
                }
            } 
            //写入轮播图文件
            $carousel = new Carousel;
            $carousel -> shift($arr);
            $carousel ->initconfig();
            $data_carousel = $carousel ->config;
            return view('admin.carousel',['carousel' => $data_carousel]); 
        } else {
            $carousel = new Carousel;
            $carousel ->initconfig();
            $data_carousel = $carousel ->config;
            return view('admin.carousel',['carousel' => $data_carousel]); 
        }
    }


    //处理接收图片
    public function deal_img($data_file)
    {
        foreach ($data_file as $key => $file) {
            $allowed_extensions = ["png", "jpg", "gif"];
            if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                return  'You may only upload png, jpg or gif';die;
            }
            $addtime=date("Ymd",time());
            $destinationPath = 'uploads/'.$addtime.'/'; //public 文件夹下面建 storage/uploads 文件夹
            //文件夹不存在直接创建
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath,0777);
            }
            $extension = $file->getClientOriginalExtension(); //文件的后缀名
            $fileName = str_random(10).time().'.'.$extension;
            $file->move($destinationPath, $fileName);
            //封面图片路径
            $filePath[] = $destinationPath.$fileName;
        }
        return $filePath;
    }
}