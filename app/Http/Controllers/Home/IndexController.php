<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Category;
use App\Http\Carousel;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\Facades\Redis;
use App\Lijie\message;


class IndexController extends Controller
{
    //主页渲染
    public function index()
    {

        //主页分类数据
        $category = new Category;
        $category -> initconfig();
        $cate = $category ->category_config;
        //轮播图
        $carousel = new Carousel;
        $carousel -> initconfig();
        $data_carousel = $carousel ->config;
        //主播数据(房间号、名称、粉丝、封面、)
        $anchors = DB::table('live_live')
	        -> select('live_live.user_id','username','fans','live_rend','category_id','anchor_img')
            -> join('live_anchor','live_anchor.user_id','=','live_live.user_id')
	        -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
            -> where('status','=','1')
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
            $detailed['success'] = 1;
        } else {
            $detailed['success'] = 0;
            $detailed['mess'] = '尚未有主播开播，敬请期待！';
        }
        $user = Session::get('username');
        if (!empty($user)) {
            $use = json_encode($user);
            $arr_user = json_decode($use,true); 
            $arr_user = array_reverse($arr_user,true);
            //var_dump($arr_user);die;
            return view('home.index',['category' => $cate ,'detailed' => $detailed ,'carousel' => $data_carousel,'anchors' => $anchors,'user' =>  $arr_user[0]]);
        } else {
            return view('home.index',['category' => $cate ,'detailed' => $detailed ,'carousel' => $data_carousel,'anchors' => $anchors]);
        }  
    }
   //ajax登录
    public function login(Request $request)
    {
        $account = $request->get('account');
        $password = $request->get('password');
        //echo "$account"," $password";
        $password = md5($password);
        $select = DB::select('select * from live_user where (username=? or telphone=?) and password = ?',["$account","$account","$password"]);
        //var_dump($select);die;
        if($select){
            //在线人数统计
            $key='user:'.date('Y-m-d');
            Redis::setBit($key,$select[0]->user_id,1);
            $select = json_encode($select);
            $select = json_decode($select,true);
            unset($select[0]['password']);
            //var_dump($select);return;
            Session::set('username', $select);

            return(json_encode($select));
        }else{
            return(json_encode('2'));
        }
    }
    //退出登录
    public function loginout(){
        Session::forget('username');
        return redirect('index/index');
    }
    //生成验证码
    public function verify($tmp)
    {
        //var_dump($tmp);die;
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 32, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        // var_dump($phrase);
        
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');

        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        $builder->output();
    }


    //验证码验证
    public function getCode(Request $request)
    {
        $userInput = $request->get('captcha');
        if (Session::get('milkcaptcha') == $userInput) {
            //用户输入验证码正确
            return(json_encode(1));
        } else {
            //用户输入验证码错误
            return(json_encode(0));


        }
    }

    //搜索详情页
    public function search(Request $request)
    {
        //主页分类数据
        $category = new Category;
        $category -> initconfig();
        $data_category = $category ->category_config;		
		//轮播图
        $carousel = new Carousel;
        $carousel -> initconfig();
        $data_carousel = $carousel ->config;
        $data = $request ->all();
        $user = $data['user'];
        $anchors = DB::table('live_anchor') 
            -> select('live_anchor.user_id','username','fans','live_rend','category_id','anchor_img') 
            -> join('live_user', 'live_anchor.user_id', '=', 'live_user.user_id')
            -> where('live_anchor.user_id','like','%'.$user.'%')
            -> join('live_live','live_anchor.user_id','=','live_live.user_id')
            -> where('status','=','1')
            -> orwhere('live_rend','like','%'.$user.'%')
            -> orwhere('username','like','%'.$user.'%')
            -> get();
        if (empty($anchors)) { 
            return view('errors.found');
        }
        return view('home.search',['category'=>$data_category,'data' => $anchors,'carousel' => $data_carousel]);
    }


  //手机号是否注册验证
  public function telCheck(Request $request)
  {
        $telephone = $request->get('telephone');
        $users = DB::select('select * from live_user where telphone = ?', [$telephone]);
        if(empty($users)){
            echo 1;
        }else{
            echo 0;
        }
  }

 //////////////////////////////////生成手机验证码//////////////////////////////////////
     public function sendTemplate(Request $request)
   {
       $accountToken='9ce55fe2962947d8bb87361256a33383' ; 
       $accountSid='8aaf07085c1ab70d015c1eba281600cf' ; 
       $AppId='8aaf07085c1ab70d015c1eba28b200d4'; 
       $ServerIP='app.cloopen.com'; 
       $ServerPort='8883'; 
       $SoftVersion='2013-12-26'; 

       $rest = new message($ServerIP,$ServerPort,$SoftVersion); 

       $a=$rest->setAccount($accountSid,$accountToken); 
       $rest->setAppId($AppId); 
      
        //var_dump($a);die;
        $tel = $request->get('telephone');

        $number=rand(1000,9999);
        ////////////把生成验证码存入session、、////////////
        Session::flash('message', $number);
        ///////////发送短信、、、、///////////

        $result = $rest->sendTemplateSMS('15210034978',array($number,'5'),"1"); 
        if($result == NULL ) {
            return json_encode(0);
        }
        if ($result->statusCode!=0) {
            return json_encode(0); 
            //下面可以自己添加错误处理逻辑
        } else {
            return json_encode(1);
            //下面可以自己添加成功处理逻辑
        }        
   }

  ///////////////////验证手机验证码、、、、/////////////////
    public function message(Request $request)
    {
        $message = $request->get('message');
        $mess = Session::get('message');
        // echo $mess;die;
        if(Session::get('message') == $message){
            return(json_encode(1));
        }else{
            return(json_encode(0));
        } 
    }  

    //用户是否存在验证、
    public function checkName(Request $request)
    {
        $username = $request->get('username');
        $users = DB::select("select * from live_user where username = ?", [$username]);
        if(empty($users)){
            echo 0;
        }else{
            echo 1;
        }
    }

    //ajax注册
    public function register(Request $request)
    {
        $get = $request->input();
        //var_dump($get);die;
        $username = $get['username'];
        $password = md5($get['password']);
        $telephone = $get['telephone'];
        $reg_time = time();

        $insert = DB::insert('insert into live_user (username, password ,telphone,reg_time) values (?,?,?,?)', ["$username","$password",$telephone,$reg_time]);
        $arr = [];
        $arr[] = $get;
        //var_dump($arr);die;
        if($insert){
            Session::set('username', $arr);
            return (json_encode($arr));
        }
    }
   

}