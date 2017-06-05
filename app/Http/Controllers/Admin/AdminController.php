<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redis;
use  App\Http\Category;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{

   public function AdminShow()
    {
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
        //统计现在在线人数
        $key = 'user:'.date('Y-m-d');
        $dataList[1] = Redis::bitcount($key);
        //统计最近七天活跃量
        $weekStart = strtotime('-7 day');
        $weekEnd = time();
        for($i = $weekStart; $i<=$weekEnd ; $i += 86400) {
            if( Redis::get('destKey7')) {
                Redis::bitop('OR', 'destKey7', 'destKey7', 'user:'.date('Y-m-d', $i));
            }
            else {
                Redis::set('destKey7',  Redis::get('user:'.date('Y-m-d', $i)));
            }
        }
        //统计最近三十天活跃量
        $monthStart = strtotime('-30 day');
        $monthEnd = time();
        for($i = $monthStart; $i<=$monthEnd ; $i += 86400) {
            if( Redis::get('destKey30')) {
                Redis::bitop('OR', 'destKey30', 'destKey30', 'user:'.date('Y-m-d', $i));
            }
            else {
                Redis::set('destKey30',  Redis::get('user:'.date('Y-m-d', $i)));
            }
        }
        $dataList[2] = Redis::bitcount('destKey7');
        $dataList[3] = Redis::bitcount('destKey30');
    	return view('admin.graph_metrics',['data'=>$data,'dataList'=>$dataList]);
    }
    //折线图
    public  function  Broken_Line(){
        $weekStart = strtotime('-7 day');
        $monthStart = strtotime('-29 day');
        $weekEnd = time();
        for($i = $weekStart; $i<=$weekEnd ; $i += 86400) {
            $data['msg'][] =  Redis::bitcount( 'user:'.date('Y-m-d', $i));
        }
        //最近三十天折线图
        for($i = $monthStart; $i<=$weekEnd ; $i += 86400) {
           $yue[] =  Redis::bitcount( 'user:'.date('Y-m-d', $i));
        }
       $count = array_chunk($yue,5);
        foreach($count as $k => $v){
          $data['count'][] = array_sum($v);
        }
        return $data;
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
}