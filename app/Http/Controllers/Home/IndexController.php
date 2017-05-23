<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //主页渲染
    public function index(){
    	return view('home.index');
    }
	public function add(){
		echo '1232';
	}

	//测试git
	public function testgit()
	{
		echo 'hello git !!!';
	}
}