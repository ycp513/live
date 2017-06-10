<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Category;
use App\Http\Carousel;
use App\Http\Vip;
use Log;

class PersonalController extends Controller
{
    //个人中心
    public function getShow()
    {
		$user = Session::get('username');
		
		$user_id = $user[0]['user_id'];
        $get_user = DB::table('live_user')->where('user_id', $user_id)->first();
        $get_anchor = DB::table('live_anchor')->where('user_id',$user_id)->first();
		
        
        $point = $get_user->point;
        $app_path = app_path();
        //直播分类
		$category = new Category;
        $category -> initconfig();
        $classify = $category ->category_config;

		if($get_anchor){
			$live_rend = $get_anchor->live_rend;
			foreach($classify as $k => $v){
			   if($k == $get_anchor->category_id){
				   $get_anchor->category_id = $v;
			   }
			}
		}else{
			$live_rend = '';
		}

        //vip等级
		$vip_dj = new Vip;
        $vip_dj -> initconfig();
        $vip = $vip_dj ->vip_config;

		
       
		//轮播图
        $carousel = new Carousel;
        $carousel -> initconfig();
        $data_carousel = $carousel ->config;
		
		//session
		$user = Session::get('username');
		
		if(!empty($user)){
			$use = json_encode($user);
			$arr_user = json_decode($use,true); 
			$arr_user = array_reverse($arr_user,true);
			return view('home.personal',['carousel' => $data_carousel,'classify'=>$classify,'get_user'=>$get_user,'live_rend'=>$live_rend,'point'=>$point,'get_anchor'=>$get_anchor,'vip'=>$vip,'user' =>  $arr_user[0]]);

		}else{
			return view('home.personal',['carousel' => $data_carousel,'classify'=>$classify,'get_user'=>$get_user,'live_rend'=>$live_rend,'point'=>$point,'get_anchor'=>$get_anchor,'vip'=>$vip]);
		}

        
    }
    //获取短信验证码
    public function getSms(){
        $iphone = $_GET['iphone'];
        $username = $_GET['username'];
        $code=rand(1000,9999);
        Session::put("'".$code."'",$code);
        $content='你好！'.$username.',您的验证码：'.$code.'。如非本人操作，可不用理会！【八维直播】';
        $url='http://api.sms.cn/sms/?ac=send&uid=ycp123&pwd=69253cce2d3f1c4cf3c786a48c1dcd71&mobile='.$iphone.'&content='.urlencode($content);
        $data=array();
        $method='GET';
        $res=$this->curlPost($url,$data,$method);
        return $res;

    }
    //查询验证码是否存在
    public  function getCode(){
        $validatecode = $_GET['validatecode'];
        $code = Session::get("'$validatecode'");
        if($validatecode == $code){
            return '1';
        }else{
            return '验证码输入错误';
        }
    }
    //修改用户信息
    public function upUser(){
        $username = Input::get('username');
        $regi_mobile = Input::get('regi_mobile');
        $ids = Input::get('ids');
        $row = DB::table('live_user')->where('user_id',$ids)->update(['username'=>"$username",'telphone'=>"$regi_mobile"]);
        if($row){
            return '1';
        }else{
            return '2';
        }
    }
    //添加主播
    public  function addAnchor(){
        $file = input::file('myfile');//获取文件值  在此我们要在头部掉用
        $number = input::get('number');
        $back_card = input::get('back_card');
        $user_id = input::get('user_id');
        $classify = input::get('classify');
        $allowed_extensions = ["png", "jpg", "gif"];
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return  'You may only upload png, jpg or gif';die;
        }
        $addtime=date("Ymd",time());
        $destinationPath = 'uploads/'.$addtime.'/'; //public 文件夹下面建 storage/uploads 文件夹
        //文件夹不存在直接创建
        if(!file_exists($destinationPath)){
            mkdir($destinationPath,0777);
        }
        $extension = $file->getClientOriginalExtension(); //文件的后缀名
        $fileName = str_random(10).time().'.'.$extension;
        $file->move($destinationPath, $fileName);
        //封面图片路径
        $filePath = $destinationPath.$fileName;
        //随机生成
       $live_rend = rand(pow(10,(6-1)), pow(10,6)-1);
       $arr = DB::table('live_anchor')->insert(['user_id'=>$user_id,'back_card'=>$back_card,'category_id'=>$classify,'live_rend'=>$live_rend,'anchor_img'=>$filePath,'number'=>$number]);
        if($arr){
            return redirect()->to('per/getShow');
        }else{
            return '添加失败';
        }

    }
    //修改密码
    public function updatePwd(){
        $pwd = md5(input::get('pwd'));
        $new_pwd = md5(input::get('new_pwd'));
        $new_pwd2 = md5(input::get('new_pwd2'));
        $user_id = input::get('user_id');
        //返回数组
        $resut = [];
        if($new_pwd != $new_pwd2){
            $resut = [
                'error'=>'两次密码不相同!',
                'errorcode'=>'1001',
            ];
        }else{

            $row =  DB::table('live_user')->where('user_id', $user_id)->first();
            if($row == $pwd){
               $arr = DB::table('live_user')->where('user_id',$user_id)->update(['password'=>$new_pwd]);
               if($arr){
                   $resut = [
                       'error'=>'修改密码成功,下次登录请使用新密码!',
                       'errorcode'=>'1000',
                   ];
               } else {
                   $resut = [
                       'error'=>'修改密码失败!请重新修改',
                       'errorcode'=>'1003',
                   ];
               }
            }else{
                $resut = [
                    'error'=>'旧密码输入错误!',
                    'errorcode'=>'1002',
                ];
            }
        }
        return json_encode($resut);
    }
    //充值余额
    public  function recharge(){
        $user_id = input::get('user_id');
        $money = input::get('money');

        $orderSn = intval(date('Y')) - 2000 . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));

        $arr = DB::table('live_order')->insert(['order_id'=>$orderSn,'user_id'=>$user_id,'price'=>$money,'type'=>'2','addtime'=>time(),'pay_type'=>'1']);
        if($arr){
            //创建支付订单
            $alipay = app('alipay.web');
            $alipay->setOutTradeNo($orderSn);
            $alipay->setTotalFee($money);
            $alipay->setSubject('Y币充值');
            $alipay->setBody('狗子团队Y币充值');

            $alipay->setQrPayMode('5'); //该设置为可选1-5，添加该参数设置，支持二维码支付。
            // 跳转到支付页面。
            return redirect()->to($alipay->getPayLink());
        }else{
            return '创建订单失败';
        }


    }
    // 异步通知支付结果
    public function AliPayNotify(){
        /// 验证请求。
        if (! app('alipay.web')->verify()) {
            Log::notice('Alipay notify post data verification fail.', [
                'data' => Request::instance()->getContent()
            ]);
            return 'fail';
        }

        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                //修改表的支付状态
                $out_trade_no = Input::get('out_trade_no');
                $total_fee = Input::get('total_fee');
                $info = DB::table('live_order')->where('order_id',$out_trade_no)->first();
            if($info->type == '1'){
                //获取vip等级 /vip充值
                $app_path = app_path();
                $vip  = include $app_path.'/vip.php';
                if(array_key_exists($total_fee,$vip)){
                    //查询出当前用户
                    $user = DB::table('live_user')->where('user_id',$info->user_id)->first();
                    $vip_endtime = $user->vip_endtime;
                    //var_dump($vip_endtime);return;
                    if($vip_endtime == '0'){
                        //vip 第一次充值
                        $time=time()+30*24*3600;
                        DB::table('live_user')->where('user_id',$info->user_id)->update(['user_vip'=>$vip[$total_fee],'vip_endtime'=>$time]);
                    }else if(time() > $vip_endtime){
                        //vip 已经过期，续费
                        $time=time()+30*24*3600;
                        DB::table('live_user')->where('user_id',$info->user_id)->update(['user_vip'=>$vip[$total_fee],'vip_endtime'=>$time]);
                    }else if(time() < $vip_endtime){
                        //vip 续费
                        $vip_endtime = $vip_endtime+30*24*3600;
                        DB::table('live_user')->where('user_id',$info->user_id)->update(['user_vip'=>$vip[$total_fee],'vip_endtime'=>$vip_endtime]);
                    }
                }
            }else if($info->type == '3'){
				//从session中取出主播id与时间 /守护
				$data = Session::get('guard_'.$info->user_id);
				$live_id = $data['live_id'];
				$times = $data['times'];
				$first = DB::table('live_guard')->where('user_id',$info->user_id)->where('anchor_id',$live_id)->first();
				if($first){
					$month = strtotime(date("Y-m-d",strtotime("+".$times." month")));
					DB::table('live_guard')->where('user_id',$info->user_id)->where('anchor_id',$live_id)->update(['end_time'=>$month,'money'=>$total_fee]);
				}else{
					$time = time();
					$month = strtotime(date("Y-m-d",strtotime("+".$times." month")));			
					DB::table('live_guard')->insert(['user_id'=>$info->user_id,'anchor_id'=>$live_id,'start_time'=>$time,'end_time'=>$month,'money'=>$total_fee]);
				}
	
			}else{
				//余额充值
				$total_fee = ($info->balance+$total_fee);
				DB::table('live_user')->where('user_id',$info->user_id)->update(['balance'=>$total_fee]);
			}
                    $arr = DB::table('live_order')->where('order_id',$out_trade_no)->update(['order_status'=>'1']);

            Log::debug('Alipay notify post data verification success.', [
                    'out_trade_no' => Input::get('out_trade_no'),
                    'trade_no' => Input::get('trade_no'),
                    'arr'=> $arr
                ]);
                break;
        }

        return 'success';
    }

    // 同步通知支付结果
    public function AliPayReturn(){
        if (! app('alipay.web')->verify()) {
            Log::info('Alipay return query data verification fail.');
        }
        //判断通知类型
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
                //修改表的支付状态
                $out_trade_no = Input::get('out_trade_no');
                $total_fee = Input::get('total_fee');
                $info = DB::table('live_order')->where('order_id',$out_trade_no)->first();
                if($info->type == '1'){
                    //获取vip等级 /vip充值
                    $app_path = app_path();
                    $vip  = include $app_path.'/vip.php';
                    if(array_key_exists($total_fee,$vip)){
                        //查询出当前用户
                        $user = DB::table('live_user')->where('user_id',$info->user_id)->first();
                        $vip_endtime = $user->vip_endtime;
                        //var_dump($vip_endtime);return;
                        if($vip_endtime == '0'){
                            //vip 第一次充值
                            $time=time()+30*24*3600;
                            DB::table('live_user')->where('user_id',$info->user_id)->update(['user_vip'=>$vip[$total_fee],'vip_endtime'=>$time]);
                        }else if(time() > $vip_endtime){
                            //vip 已经过期，续费
                            $time=time()+30*24*3600;
                            DB::table('live_user')->where('user_id',$info->user_id)->update(['user_vip'=>$vip[$total_fee],'vip_endtime'=>$time]);
                        }else if(time() < $vip_endtime){
                            //vip 续费
                            $vip_endtime = $vip_endtime+30*24*3600;
                            DB::table('live_user')->where('user_id',$info->user_id)->update(['user_vip'=>$vip[$total_fee],'vip_endtime'=>$vip_endtime]);
                        }
                    }
                }else if($info->type == '3'){
					//从session中取出主播id与时间/守护
					$data = Session::get('guard_'.$info->user_id);
					$live_id = $data['live_id'];
					$times = $data['times'];
					$first = DB::table('live_guard')->where('user_id',$info->user_id)->where('anchor_id',$live_id)->first();
					if($first){
						$month = strtotime(date("Y-m-d",strtotime("+".$times." month")));
						DB::table('live_guard')->where('user_id',$info->user_id)->where('anchor_id',$live_id)->update(['end_time'=>$month,'money'=>$total_fee]);
					}else{
						$time = time();
						$month = strtotime(date("Y-m-d",strtotime("+".$times." month")));			
						DB::table('live_guard')->insert(['user_id'=>$info->user_id,'anchor_id'=>$live_id,'start_time'=>$time,'end_time'=>$month,'money'=>$total_fee]);
					}
				
	
				}else{
					//余额充值
					$total_fee = ($info->balance+$total_fee);
					DB::table('live_user')->where('user_id',$info->user_id)->update(['balance'=>$total_fee]);
				}
                $arr = DB::table('live_order')->where('order_id',$out_trade_no)->update(['order_status'=>'1']);

                return view('home.alipay');

            case 'TRADE_FINISHED':
            break;
        }
    }

    //vip充值
    public  function vipRecharge(){
        $user_id = input::get('user_id');
        $viprank = input::get('viprank');
        $orderSn = intval(date('Y')) - 2000 . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));

        $arr = DB::table('live_order')->insert(['order_id'=>$orderSn,'user_id'=>$user_id,'price'=>$viprank,'type'=>'1','addtime'=>time(),'pay_type'=>'1']);
        if($arr){
            //创建支付订单
            $alipay = app('alipay.web');
            $alipay->setOutTradeNo($orderSn);
            $alipay->setTotalFee($viprank);
            $alipay->setSubject('vip充值');
            $alipay->setBody('狗子团队vip充值');

            $alipay->setQrPayMode('5'); //该设置为可选1-5，添加该参数设置，支持二维码支付。
            // 跳转到支付页面。
            return redirect()->to($alipay->getPayLink());
        }else{
            return '创建订单失败';
        }
    }








    /*curlpost传值*/
    public function curlPost($url,$data,$method){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding:gzip, deflate'));
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
        if($method=="POST"){
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);//6.执行
        if(curl_errno($ch)){
            return curl_error($ch);
        }
        curl_close($ch);
        return $tmpInfo;
    }

}
