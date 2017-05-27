<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class PersonalController extends Controller
{
    //个人中心
    public function getShow()
    {
        $get_user = DB::table('live_user')->where('user_id', '1')->first();
        $get_anchor = DB::table('live_anchor')->where('user_id',$get_user->user_id)->first();
        $live_rend = $get_anchor->live_rend;
        $point = $get_user->point;
        $app_path = app_path();
        $classify  = include $app_path.'/category.php';
        return view('home.personal',['classify'=>$classify,'get_user'=>$get_user,'live_rend'=>$live_rend,'point'=>$point,'get_anchor'=>$get_anchor]);
    }
    //获取短信验证码
    public function getSms(){
        $iphone = $_GET['iphone'];
        $username = $_GET['username'];

        $code=rand(1000,9999);
        //session(['name'=>$code]);
        Session::put('name',$code);
        echo Session::get('name');
        die;
        $content='你好！'.$username.',您的验证码：'.$code.'。如非本人操作，可不用理会！【八维直播】';

        $url='http://api.sms.cn/sms/?ac=send&uid=ycp123&pwd=69253cce2d3f1c4cf3c786a48c1dcd71&mobile='.$iphone.'&content='.urlencode($content);
        $data=array();
        $method='GET';
        $res=$this->curlPost($url,$data,$method);
        echo $res;

    }
    //查询验证码是否存在
    public  function getCode(){
       // $validatecode = $_GET['validatecode'];
        $code = Session::get('X');
        //var_dump($code);die;
        echo $code;die;
        if($validatecode == $code){
            echo '1';
        }else{
            echo '2';
        }
    }
    //修改用户信息
    public function upUser(){
        $username = Input::get('username');
        $regi_mobile = Input::get('regi_mobile');
        $ids = Input::get('ids');
        $row = DB::table('live_user')->where('user_id',$ids)->update(['username'=>"$username",'telphone'=>"$regi_mobile"]);
        if($row){
            echo '1';
        }else{
            echo '2';
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
            echo  'You may only upload png, jpg or gif';die;
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
            echo '添加失败';
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
        echo json_encode($resut);
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
