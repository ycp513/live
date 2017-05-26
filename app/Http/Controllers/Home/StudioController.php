<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudioController extends Controller
{

   	//直播间渲染
   	public function liveStudio(){

   		$data = [];
   		return view('home.studio',['data'=>$data]);
   	}
   	public function live()
   	{
        $author = [
            'id' => 'test',
            'username' => '苞米地的秘密',
            'user_id' => '1',
            'user_img' => '1.jpg',
        ];
   		return view('home.live',$author);
   	}

}
