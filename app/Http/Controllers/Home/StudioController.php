<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudioController extends Controller
{
   	//直播间渲染
   	public function liveStudio(Request $request)
   	{
   		$id = $request -> input('id');
   		echo $id;die;
   		return view('home.studio');
   	}
}
