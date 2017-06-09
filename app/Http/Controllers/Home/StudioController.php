<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use App\Jobs\RedisList;
use Session;
class StudioController extends Controller
{

   	public function live()
   	{
        //Redis::del('vip1');return;
        //获取主播id
        $user_id = Input::get('id');
        $users = [];
        $author = [];
        //获取session
        if(Session::has('username')){
            $users = Session::get('username');
            //用户vip等级入redis有序集合
            $time = substr(time(),-4);
            $this->ranking_vip($user_id,$users[0]['user_id'],$time);
            $users[0]['username'] .= '-'.$time;
            $author['users'] = $users[0];
			$arr = DB::table('user_concern')->where('user_id',$users[0]['user_id'])->where('anchor_id',$user_id)->first();
			if($arr){
				$users[0]['con_status'] = $arr->con_status;
			}else{
				$users[0]['con_status'] = '';
			}
			$author['users'] = $users[0];
        }else{
            $author['users']['username'] = '';
            $author['users']['balance'] = '';
        }
        //查询vip等级
        $vipkey = 'vip'.$user_id;
        $vip = Redis::zrevrange($vipkey,0,20,'withscores');
        $arr_vip = [];
        foreach($vip as $key =>$val)
        {
            if(strpos($key,'-')){
                $k = substr($key,0,strpos($key,'-'));
            }else{
                $k = $key;
            }
            if(!array_key_exists($k,$arr_vip)){
                $arr_vip[$k] = $val;
            }
        }
        //var_dump($arr_vip);
       //var_dump($vip);return;
        $author['vip'] = $arr_vip;
        //redis获取贡献榜
        $devote = $this->ranking_devote($user_id);
        $author['devote'] = $devote;
        //获取守护榜信息
        $guard = $this->ranking_guard($user_id);
        //var_dump($guard);return;
        $author['guard'] = $guard;
        //查询主播信息
        $anchors = DB::table('live_anchor') 
          -> select('live_anchor.user_id','username','fans','live_rend','category_id','anchor_img') 
          -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
          -> where('live_anchor.user_id','=',$user_id)
          -> get();
        $giff = DB::table('live_gift')
            /*->select('gift_id, giftname, price, img_path')*/
            ->get();
        if ($anchors) {
            foreach ($anchors as $key => $value) {
                $author['id'] = $value -> live_rend;
                $author['username'] = $value -> username;
                $author['user_id'] = $value -> user_id;
                $author['user_img'] = $value -> anchor_img;
                //$author['balance'] = $value->balance;
                $author['gift'] = json_decode(json_encode($giff),true);
            }
        } else { 
            return view('errors.found');
        }
   		return view('home.live',$author);
   	}


    //刷礼物方法
    public function sendGiff()
    {
        //用户id
        $user = Session::get('username');
        $user_id = $user[0]['user_id'];
        //主播ID
        $anchor_id = Input::get('anchor_id');
        //礼物id
        $giff_id = Input::get('giff_id');
        //礼物数量
        $giff_num = Input::get('giff_num');
        //礼物价格
        $total_price =  ($giff_num * Input::get('giff_price'));
        //直播id
        $live_id = Input::get('id');
        //礼物队列入库
        $redis = $this->dispatch(new RedisList( $user_id, $anchor_id, $giff_id, $giff_num, $total_price, $live_id));
    }
/////////////////////////////////////////////////////////////排行榜数据//////////////////////////////////////////////
    //主播贡献榜
    public function ranking_devote($anchor_id=1)
    {
        $devotekey = 'devote'.$anchor_id;
        if(Redis::zcard($devotekey)){
            //存在
            //var_dump(Redis::zrem($devotekey,'11','12','10'));return;
            //Redis::del($devotekey);
        }else{
            //不存在或成员为0
            $devote = DB::table('user_giff')
                -> select('user_id','anchor_id',DB::raw('SUM(total_price) as toal'))
                -> where('anchor_id','=',$anchor_id)
                ->groupBy('user_id')
                -> get();
            //var_dump($devote);return;
            if($devote){
                foreach($devote as $key => $v){
                    Redis::zadd($devotekey,$v->toal,$v->user_id);
                }
            }
        }
        //Redis::zadd('devote','100','zhl');
        $arr = Redis::zrevrange($devotekey,0,10,'withscores');
        $result = [];
        foreach($arr as $key => $v){
            $data = DB::table('live_user')
                ->select('user_id','username')
                ->where('user_id','=',$key)
                ->first();
            $username = $data->username;
            $result[$username] = $v;
        }
        return $result;
    }
    //vip榜单
    public function ranking_vip($anchor_id=1,$user_id  = 2,$time)
    {
        $vipkey = 'vip'.$anchor_id;
        $vip = DB::table('live_user')
            ->select('user_id','username','user_vip')
            ->where('user_id','=',$user_id)
            ->first();
        if($vip){
            if(Redis::zadd($vipkey,$vip->user_vip,$vip->username.'-'.$time)){
                return true;
            }
        }
    }
    //退出直播室 vip榜单变化
    public function change_vip(){
        $username = Input::get('username');
        $anchor_id = Input::get('anchor_id');
        $vipkey = 'vip'.$anchor_id;
        //判断是游客还是用户
        Redis::zrem($vipkey,trim($username));
        $vip = Redis::zrevrange($vipkey,0,20,'withscores');
        $arr_vip = [];
        foreach($vip as $key =>$val)
        {
            if(strpos($key,'-')){
                $k = substr($key,0,strpos($key,'-'));
            }else{
                $k = $key;
            }
            if(!array_key_exists($k,$arr_vip)){
                $arr_vip[$k] = $val;
            }
        }
        return json_encode($arr_vip);


    }
    //守护榜单
    public function ranking_guard($anchor_id=1)
    {
        $guardkey = 'guard' . $anchor_id;
        if (Redis::zcard($guardkey)) {
            //存在
            //var_dump(Redis::zrem($devotekey,'11','12','10'));return;
            //Redis::del($devotekey);
        } else {
            //不存在或成员为0
            $guard = DB::table('live_guard')
                ->select('user_id', 'anchor_id', 'money')
                ->where('start_time','<',time())
                ->where('end_time','>',time())
                ->where('anchor_id', '=', $anchor_id)
                ->groupBy('user_id')
                ->get();
            //var_dump($guard);return;
            if ($guard) {
                foreach ($guard as $key => $v) {
                    Redis::zadd($guardkey, $v->money, $v->user_id);
                }
            }
        }
        $arr = Redis::zrevrange($guardkey,0,10,'withscores');
        $result = [];
        foreach($arr as $key => $v){
            $data = DB::table('live_user')
                ->select('user_id','username')
                ->where('user_id','=',$key)
                ->first();
            $username = $data->username;
            $result[$username] = $v;
        }
        return $result;
    }
	//查询守护
	public function guardShow(){
		$live_id = Input::get('live_id'); 
		//获取session
		$users = Session::get('username');
		$user_id = $users[0]['user_id'];
		$arr = DB::table('live_guard')->where('user_id',$user_id)->where('anchor_id',$live_id)->first();
		$arr->start_time = date('Y-m-d',$arr->start_time);
		$arr->end_time = date('Y-m-d',$arr->end_time);
		return json_encode($arr);
	}
	//添加守护
	public function guardAdd(){
		$starttime = Input::get('starttime');
		$z_money = Input::get('z_money');
		$live_id = Input::get('live_id'); 
		//获取session
		$users = Session::get('username');
		$user_id = $users[0]['user_id'];
		//生成订单号
		$orderSn = intval(date('Y')) - 2000 . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
		$arr = DB::table('live_order')->insert(['order_id'=>$orderSn,'user_id'=>$user_id,'price'=>$z_money,'type'=>'3','addtime'=>time(),'pay_type'=>'1']);
        if($arr){
            //创建支付订单
            $alipay = app('alipay.web');
            $alipay->setOutTradeNo($orderSn);
            $alipay->setTotalFee($z_money);
            $alipay->setSubject('守护充值');
            $alipay->setBody('狗子团队Y币充值');

            $alipay->setQrPayMode('5'); //该设置为可选1-5，添加该参数设置，支持二维码支付。

			$data = ['live_id'=>$live_id,'times'=>$starttime];
			Session::put('guard_'.$user_id,$data);
            // 跳转到支付页面。
            return redirect()->to($alipay->getPayLink());
        }else{
            return '创建订单失败';
        }
	}
	//关注
	public function attenTion(){
		$live_id = Input::get('live_id'); 
		//获取session
		$users = Session::get('username');
		$user_id = $users[0]['user_id'];
		$arr = DB::table('user_concern')->where('user_id',$user_id)->where('anchor_id',$live_id)->first();
		if($arr){
			$start = $arr->con_status == '1' ? '0' : '1'; 
			$up = DB::table('user_concern')->where('user_id',$user_id)->where('anchor_id',$live_id)->update(['con_status'=>$start]);
			if($up){
				return $start;
			}
		}else{
			$add = DB::table('user_concern')->insert(['user_id'=>$user_id,'anchor_id'=>$live_id]);
			if($add){
				return '3';
			}	
		}
	}

	//ajax登录
    public function login(Request $request)
    {
         $account = $request->get('account');
         $password = $request->get('password');
         $password = md5($password);
         $select = DB::select('select * from live_user where (username=? or telphone=?) and password = ?',["$account","$account","$password"]);
         //var_dump($select);die;
         if($select){
             //在线人数统计
             $key='user:'.date('Y-m-d');
             //$key ='user:2017-05-10';
             Redis::setBit($key,$select[0]->user_id,1);
             $select = json_encode($select);
             $select = json_decode($select,true);
             unset($select[0]['password']);
             //var_dump($select);return;
             Session::set('username', $select);

            return(json_encode('1'));
         }else{
             return(json_encode('2'));
         }
    }

}
