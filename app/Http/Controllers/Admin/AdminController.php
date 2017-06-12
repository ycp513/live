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
        $data['direct'] = DB::table('live_live')->where('status','=',1)->count();
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
        //统计交易额
        $live = $this->arr();
        //统计今天礼物分类成交量
    	return view('admin.graph_metrics',['data'=>$data,'dataList'=>$dataList,'live'=>$live]);
    }
   //查询交易额
    function  arr(){
        $date = date('Y-m-d');
        $arr = DB::table('live_live')->where('live_date','=',$date)->pluck('live_id');
        $live['monday'] = 0;
        $live['week'] = 0;
        $live['month'] = 0;
        //查询今天交易额
        for($i = 0; $i<count($arr); $i++){
            $live['monday'] += DB::table('user_giff')->where('live_id','=',$arr[$i])->sum('total_price');
        }
        $yi = date("Y-m-d ",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y")));
        $tian = date("Y-m-d",mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y")));
        $live_id =  DB::table('live_live')->whereBetween('live_date',array($yi,$tian))->lists('live_id');
        //查询本周交易额
        for($i = 0; $i<count($live_id); $i++){
            $live['week'] += DB::table('user_giff')->where('live_id','=',$live_id[$i])->sum('total_price');
        }
        //本月一号
        $a = date("Y-m-d ",mktime(0, 0 , 0,date("m"),1,date("Y")));
        //本月月底
        $c = date("Y-m-d",mktime(23,59,59,date("m"),date("t"),date("Y")));
        $live_month =  DB::table('live_live')->whereBetween('live_date',array($a,$c))->lists('live_id');
        //查询本月交易额
        for($i = 0; $i<count($live_month); $i++){
            $live['month'] += DB::table('user_giff')->where('live_id','=',$live_month[$i])->sum('total_price');
        }
        return $live;
    }
    //折线图
    public  function  amount_user()
    {
        $weekStart = strtotime('-7 day');
        $monthStart = strtotime('-29 day');
        $weekEnd = time();
        for ($i = $weekStart; $i <= $weekEnd; $i += 86400) {
            $data['msg'][] = Redis::bitcount('user:' . date('Y-m-d', $i));
        }
        //return $data;
        //最近三十天折线图
        for ($i = $monthStart; $i <= $weekEnd; $i += 86400) {
            $yue[] = Redis::bitcount('user:' . date('Y-m-d', $i));
        }
        $count = array_chunk($yue, 5);
        foreach ($count as $k => $v) {
            $data['count'][] = array_sum($v);
        }
        return $data;
    }

    public  function  Broken_Line()
    {
        //本周交易额折线图
        $yi = date("Y-m-d ", mktime(0, 0, 0, date("m"), date("d") - date("w") + 1, date("Y")));
        $tian = date("Y-m-d", mktime(23, 59, 59, date("m"), date("d") - date("w") + 7, date("Y")));
        //查询本周交易额
        for ($i = 1; $i <= 7; $i++) {
            $res[] = date("Y-m-d ", mktime(0, 0, 0, date("m"), date("d") - date("w") + $i, date("Y")));
        }
        for ($i = 0; $i < count($res); $i++) {
            $date[$res[$i]] = DB::table('live_live')->where('live_date', '=', $res[$i])->pluck('live_id');
        }
        foreach ($date as $k => $v) {
            if ($v != null) {
                for ($i = 0; $i < count($v); $i++) {
                    $c[$k][] = DB::table('user_giff')->where('live_id', '=', $v[$i])->pluck('total_price');
                }
            } else {
                $c[$k] = array();
            }
        }
        foreach ($c as $k => $v) {
            foreach ($v as $k1 => $v1) {
                $c[$k][$k1] = array_sum($v1);
            }
            $c[$k] = array_sum($c[$k]);
        }
        foreach ($c as $k => $v) {
            $data['price'][] = $v;
        }
        //return $data;
        //获取当月日期
        $j = date('t'); //获取当前月份天数
        $start_time = strtotime(date('Y-m-01'));  //获取本月第一天时间戳
        $array = array();
        for ($i = 0; $i < $j; $i++) {
            $array[] = date('Y-m-d', $start_time + $i * 86400); //每隔一天赋值给数组
        }
        for ($i = 0; $i < count($array); $i++) {
            $month[$array[$i]] = DB::table('live_live')->where('live_date', '=', $array[$i])->pluck('live_id');
        }
        foreach ($month as $k => $v) {
            if ($v != null) {
                for ($i = 0; $i < count($v); $i++) {
                    $ke[$k][] = DB::table('user_giff')->where('live_id', '=', $v[$i])->pluck('total_price');
                }
            } else {
                $ke[$k] = array();
            }
        }
        foreach ($ke as $k => $v) {
            foreach ($v as $k1 => $v1) {
                $ke[$k][$k1] = array_sum($v1);
            }
            $ke[$k] = array_sum($ke[$k]);
        }
        $zhe = array_chunk($ke, 5);
        foreach ($zhe as $k => $v) {
            $data['cc'][] = array_sum($v);
        }
        return $data;
    }
    public  function  Volumes()
    {
        //查询今日主播类型成交量
        $today = date('Y-m-d');
        $live_id = DB::table('live_live')->where('live_date', '=', $today)->select('user_id', 'live_id')->get();
        $category = new Category();
        $category->initconfig();
        $ca = $category->category_config;
        $category = $ca;
        if($live_id==null) {
            foreach ($ca as $k => $v) {
                $ca[$k] = 0;
                if ($v=='其他') {
                    $ca[$k] = 1;
                }
            }
            $data['ca']=$ca;
        }else{


        foreach ($live_id as $k => $v) {
            $live_id[$k]->sum = DB::table('user_giff')->where('live_id', '=', $v->live_id)->sum('total_price') ? DB::table('user_giff')->where('live_id', '=', $v->live_id)->sum('total_price') : 0;
            $categorys[] = DB::table('live_anchor')->where('user_id', '=', $v->user_id)->select('category_id')->first();
            $live_id[$k]->category_id = $categorys[$k]->category_id;
        }
        foreach ($ca as $k => $v) {
            $ca[$k] = 0;
            foreach ($live_id as $k1 => $v1) {
                if ($v1->category_id == $k) {
                    $ca[$k] += $v1->sum;
                }
            }
          }
          $data['ca'] = $ca;
        }
        $color = ['red', 'orange ', 'yellow', 'green', 'blue', '#fff', '#FF00FF'];

        $data['category'] = $category;
        $data['color'] = $color;
        //最近七天的成交量
        $xia = $this->The_Date(7);
        $data['xia'] = $xia;
        //查询最近三十天成交量
        $Thirty_days = $this->The_Date(30);
        $data['Thirty_days'] = $Thirty_days;
        return $data;
    }
    //主播分类成交量查询
    public function  Host_Classification(){
        //查询今日礼物分类成交量
        $data['live_gift'] = DB::table('live_gift')->lists('giftname');
        $colors = ['#76EE00', '#68228B ', '#CD0000', '#EEAD0E', '#FFDEAD', '#F08080', '#00008B','#000'];
        $data['colors'] = $colors;
        $today = date('Y-m-d');
        $gift_id =  DB::table('live_live')->where('live_date','=',$today)->lists('live_id');
        //调用方法得到今日礼物分 类成交量
        $data['g'] = $this->Volume($gift_id);
        //查询七天分类礼物成交量
        $m = $this->Datetime(7);
        //调用方法得到七天礼物分类成交量
        $data['m'] = $this->Volume($m);
      //调用方法得到三十天礼物分类成交量
        $n = $q = $this->Datetime(30);
        $data['n'] = $this->Volume($n);
        return $data;
    }
    //封装处理日期
    public function  Datetime($num){
        for($i=0; $i<$num;$i++){
            $da = date('Y-m-d', strtotime('-'.$i.' days'));
            $q[] =  DB::table('live_live')->where('live_date','=',$da)->lists('live_id');
        }
        foreach($q as $k => $v){
            foreach($v as $k =>$v){
                $m[] = $v;
            }
        }
        return $m;
    }
    //封装最近时间段礼物分类成交量统计
    public  function  Volume($gift_id){
        $y = DB::table('live_gift')->lists('giftname','gift_id');
        if($gift_id==null){
            foreach($y as $k =>$v){
                $g[$k] = 0 ;
                if($k==8){
                    $g[$k] = 1 ;
                }
            }
            return $g;
        }
        for($i=0;$i<count($gift_id);$i++){
            $id[] =  DB::table('user_giff')->where('live_id','=',$gift_id[$i])->select('giff_id','total_price')->get();
        }
        $ff = array();
        foreach($id as $k => $v){
            foreach($v as $k1 => $v1){
                $ff[] = $v1;
            }
        }
        foreach($y as $k => $v) {
            $g[$k] = 0;
            foreach ($ff as $k1 => $v1) {
                if ($v1 != null) {
                    if ($v1->giff_id == $k) {
                        $g[$k] += $v1->total_price;
                    }
                }
            }
        }
        return $g;
    }
    //封装获取最近时间daunt成交量方法
     public  function  The_Date($date){
         $category = new Category();
         $category->initconfig();
         $ca = $category->category_config;
         for($i=0; $i<$date;$i++){
             $da = date('Y-m-d', strtotime('-'.$i.' days'));
             $Seven[] =  DB::table('live_live')->where('live_date','=',$da)->select('user_id','live_id')->get();
         }
         foreach($Seven as $k => $v) {
             foreach ($v as $k1 => $v1) {
                 $Seven[$k][$k1]->sum = DB::table('user_giff')->where('live_id', '=', $v1->live_id)->sum('total_price') ? DB::table('user_giff')->where('live_id', '=', $v1->live_id)->sum('total_price') : 0;
                 $a[]=$v1;
             }
         }

         foreach($a as $k =>$v){
             $days[] = DB::table('live_anchor')->where('user_id', '=', $v->user_id)->select('category_id')->first();
             $a[$k]->category_id = $days[$k]->category_id;
         }
         foreach($ca as $k => $v) {
             $xia[$k] = 0;
             foreach ($a as $k1 => $v1) {
                 if ($v1->category_id == $k) {
                     $xia[$k] += $v1->sum;
                 }
             }
         }
         return $xia;
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
        if($data){
            foreach($data as $k => $v){
                $username= DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
                $v->username = $username[$v->user_id];
                $v->addtime= date('Y-m-d H:i:s',$v->addtime);
            }
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
        if($data){
            foreach($data as $k => $v){
                $username = DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
                $v->username = $username[$v->user_id];
                $anchor = DB::table('live_user')->where('user_id','=',$v->anchor_id)->lists('username','user_id');
                $v->anchor = $anchor[$v->anchor_id];

                $giftname = DB::table('live_gift')->where('gift_id','=',$v->giff_id)->lists('giftname','gift_id');
                $v->giftname = $giftname[$v->giff_id];
            }
        }

    	return view('admin.gift_order',['data'=>$data]);
    }

       //直播列表
    public function Contacts()
    {
        $category = new Category();
        $category->initconfig();
        $ca = $category->category_config;
        $data = DB::table('live_live')->where('status','=',1)->get();
       // print_r($data);return;
        if($data){
            foreach($data as $k =>$v){
                if($v->user_id === null){
                    $w = $v;
                    $w->username = '非法连接，请核实';
                    $v->cate='';
                    unset($data[$k]);
                    array_unshift($data,$w);
                }else{
                    $username =  DB::table('live_user')->where('user_id','=',$v->user_id)->lists('username','user_id');
                    $v->username = $username[$v->user_id];
                    $cate = DB::table('live_anchor')->where('user_id','=',$v->user_id)->lists('category_id','user_id');
               //print_r($cate[$v->user_id]);
                   foreach($ca as $k1 => $v1){
                        if($cate[$v->user_id] == $k1){
                            $v->cate = $v1;
                        }
                    };

                }
            }
        }
    	  return view('admin.contacts',['data'=>$data]);
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