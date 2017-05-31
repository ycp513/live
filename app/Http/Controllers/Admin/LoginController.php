<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;


use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{   //渲染登陆页面
	public function Login(){
	 if(Input::get('username')){
		 $post = Input::get();
		 $res = DB::table('adminuser')->where('username','=',$post['username'])->first();
	     if(!$res){ 
		 	$msg='用户名错误';
            return view('admin.login',['msg'=>$msg]);
		  }elseif($res->pwd!=$post['pwd']){
            $ms='密码错误';
            return view('admin.login',['ms'=>$ms]);
		  }elseif($res->username=$post['username'] and $res->pwd=$post['pwd']){
		  	Session::put('user', $res);
		  	return Redirect()->action('Admin\AdminController@AdminShow');
		  } 
	 }else{
		 return view('admin.login');
	  }
		
	}
   
}