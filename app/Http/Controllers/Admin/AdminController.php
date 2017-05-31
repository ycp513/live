<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
   // public function __construct()
   //  {    
   //     echo 11;return;
   //  	// if(empty(Session::get('user')))
   //  	//  {
   //  	//  	return redirect()->action('Admin\LoginController@login');
   //  	//  }
   //  }
    
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
    	 return view('admin.graph_metrics');
    }
   //主页
    public function Empty_Page()
    {
    	 return view('admin.empty_page');
    }
    //用户充值订单列表
    public function Table()
    {
    	 return view('admin.table');
    }
  
     //主播体现列表
    public function Anchor_Order()
    {
    	 return view('admin.anchor_order');
    }

      //礼物订单
    public function Gift_Order()
    {
    	 return view('admin.gift_order');
    }

       //直播列表
    public function Contacts()
    {
    	 return view('admin.contacts');
    }

       //直播用户状态详情类表
    public function Clients()
    {
    	 return view('admin.clients');
    }
   //用户详细
    public function Table_User()
    {
    	 return view('admin.table_user');
    }
    //直播记录
    public function Live_Recording()
    {
    	 return view('admin.live_recording');
    }
}