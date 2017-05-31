<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Gregwar\Captcha\CaptchaBuilder;
use Session;

use App\Lijie\message;

class IndexController extends Controller
{
    //主页渲染
    public function index()
    {
      $user = Session::get('username');
      if(!empty($user)){
              $use = json_encode($user);
              $arr_user = json_decode($use,true); 
              $arr_user = array_reverse($arr_user,true);
              //var_dump($arr_user);die;
         return view('home.index',['user' =>  $arr_user[0]]);
      }else{
          return view('home.index');
      }
      //var_dump($user);die;    
    }

   //ajax登录
    public function login(Request $request)
    {
         $account = $request->get('account');
         $password = $request->get('password');
         //echo "$account"," $password";
         $password = md5($password);
         $select = DB::select('select * from live_user where username=? or telphone=? and password = ?',["$account","$account","$password"]);
         //var_dump($select);die;
         if($select){
            Session::set('username', $select);

          return(json_encode($select));
         }
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
       if($result->statusCode!=0) {
           return json_encode(0); 
           //下面可以自己添加错误处理逻辑
       }else{
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
     $get[] = $get;
     //var_dump($insert);die;
     if($insert){
       Session::flash('username', $get);

        return (json_encode($get));
     }
   }

 //防xss攻击
  public function _remove_xss($string)
  {
        if (!is_array($string)) {
            $string = trim($string);
            $string = strip_tags($string);
            $string = htmlspecialchars($string);
            $string = str_replace(array('"', "\\", "'", "/", "..", "../", "./", "//"), '', $string);
            $no = '/%0[0-8bcef]/';
            $string = preg_replace($no, '', $string);
            $no = '/%1[0-9a-f]/';
            $string = preg_replace($no, '', $string);
            $no = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';
            $string = preg_replace($no, '', $string);
            return $string;
        }
  }
    

}