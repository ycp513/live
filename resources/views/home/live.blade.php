<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$username}}--一棵葱直播</title>
    <link rel="shortcut icon" href="favicon.ico"> <link href="{{URL::asset('/home/css/bootstrap.min.css?v=3.3.6')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/css/font-awesome.css?v=4.4.0')}}" rel="stylesheet">

    <link href="{{URL::asset('/home/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/css/style.css?v=4.1.0')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/video/video-js.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ URL::asset('/home/css/index-7f196aa861.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ URL::asset('/home/css/headfoot-7232928f5d.mix.css') }}" type="text/css">
    <script>

        document.oncontextmenu   =   ppMousedownOfRight;     //   for   IE5+
        document.onkeydown = ppPressF5;

        if (window.addEventListener) {
            FixPrototypeForGecko();  //是Firefox
        }
        /**
         * 在Firefox中获event
         */
        function FixPrototypeForGecko() {
            window.constructor.prototype.__defineGetter__("event", window_prototype_get_event);
        }

        function window_prototype_get_event() {
            return SearchEvent();
        }
        function SearchEvent() {
            if (document.all)
                return window.event;

            func = SearchEvent.caller;

            while (func != null) {
                var arg0 = func.arguments[0];

                if (arg0 instanceof Event) {
                    return arg0;
                }
                func = func.caller;
            }
            return null;
        }

        //禁止用F5键
        function ppPressF5(){
            if(event.keyCode==116)
            {
                event.keyCode=0;
                event.returnValue=false;
                return   false;
            }
        }

        //禁止右键弹出菜单
        function  ppMousedownOfRight(){
            event.cancelBubble   =   true
            event.returnValue   =   false;
            return   false;
        }
    </script>

    <script src="{{URL::asset('/home/video/video.js')}}"></script>
    <!-- 全局js -->
    <script src="{{URL::asset('/home/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{URL::asset('/home/js/bootstrap.min.js?v=3.3.6')}}js/"></script>
    <script src="{{URL::asset('/home/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- 自定义js -->
    <script src="{{URL::asset('/home/js/content.js?v=1.0.0')}}"></script>

    <script>
        videojs.options.flash.swf = "{{URL::asset('/home/video/video-js.swf')}}";
    </script>

    <style>
        body,p{margin:0px; padding:0px; font-size:14px; color:#333; font-family:Arial, Helvetica, sans-serif;}
        #ltian,.rin{width:98%; margin:5px auto;}
        #ltian{border:1px #ccc solid;overflow-y:auto; overflow-x:hidden; position:relative;}
        #ct{margin-right:1px; height:100%;overflow-y:auto;overflow-x: hidden;}
        /*#us{width:110px; overflow-y:auto; overflow-x:hidden; float:right; border-left:1px #ccc solid; height:100%; background-color:#F1F1F1;}*/
        /*#us p{padding:3px 5px; color:#08C; line-height:20px; height:20px; cursor:pointer; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}*/
        /*#us p:hover,#us p:active,#us p.ck{background-color:#069; color:#FFF;}*/
        /*#us p.my:hover,#us p.my:active,#us p.my{color:#333;background-color:transparent;}*/
        button{float:right; width:80px; height:35px; font-size:18px;}
        input{width:100%; height:30px; padding:2px; line-height:20px; outline:none; border:solid 1px #CCC;}
		.jj{width:0px; height:0px; padding:0px; line-height:0px; outline:none; border:none;}
        .rin p{margin-right:160px;}
        .rin span{float:right; padding:6px 5px 0px 5px; position:relative;}
        .rin span img{margin:0px 3px; cursor:pointer;}
        .rin span form{position:absolute; width:25px; height:25px; overflow:hidden; opacity:0; top:5px; right:5px;}
        .rin span input{width:180px; height:25px; margin-left:-160px; cursor:pointer}

        #ct p{padding:5px; line-height:20px;}
        #ct a{color:#069; cursor:pointer;}
        #ct span{color:#999; margin-right:10px;}
        .c2{color:#999;}
        .c3{background-color:#DBE9EC; padding:5px;}
        .qp{position:absolute; font-size:12px; color:#666; top:5px; right:20px; text-decoration:none; color:#069;
            z-index: 250;}
        #ems{position:absolute; z-index:5; display:none; top:0px; left:0px; max-width:230px; background-color:#F1F1F1; border:solid 1px #CCC; padding:5px;}
        #ems img{width:44px; height:44px; border:solid 1px #FFF; cursor:pointer;}
        #ems img:hover,#ems img:active{border-color:#A4B7E3;}
        #ems a{color:#069; border-radius:2px; display:inline-block; margin:2px 5px; padding:1px 8px; text-decoration:none; background-color:#D5DFFD;}
        #ems a:hover,#ems a:active,#ems a.ck{color:#FFF; background-color:#069;}
        .tc{text-align:center; margin-top:5px;}
        body {
        background: #F0F0F0;
        }
        .left-memu {
        width: 50px;height: 700px;position: absolute;border: 1px solid #f2dede;
        }
        .video-div {
        width: 850px;height: 600px;position: absolute;left: 60px;background-image: url("{{URL::asset('/home/img/sheji40_p2.jpg')}}");
        }
        .msg-div {
        width: 350px;height: 250px;position: absolute;left:912px;z-index: 300;
        }
        .chat-div{
        width: 350px;height: 390px;position: absolute;left:912px;top:260px;z-index: 50;background: #ffffff;
        }
        .gift-div {
        width: 850px;height: 90px;background: #28a4c9;position: absolute;left:60px;top: 610px;z-index: 99999;
        }
        .bs-glyphicons-list li {
        width: 50px;height: 70px;
        }
        .bs-glyphicons .glyphicon-class{
            text-align:left;
            width: 40px;
        }
        #example_video_1 {
            position: absolute;left:100px;bottom:0px;z-index: 1000;
        }
        /*#div-img {*/
            /*position: absolute;left:0px;top: 230px;z-index: 100;*/
        /*}*/
        .userInfo {
            background: #fff;
            width: 850px;height: 100px;
        }
        .userInfo img{
            border-radius: 50%;margin: 8px;float: left;

        }
        .userInfo .basic {
            float: left;margin-top:25px;font-size: 18px;margin-left: 10px ;
        }
        .concern {
            float: right;margin: 30px;;
        }
        .panel {
            background-image: url("{{URL::asset('/home/img/123.png')}}");
            background-repeat :no-repeat;
            background-position : 5px 15px;
            line-height: 1.5em;
            font-family: "微软雅黑";
            font-size: 18px;
            color: #000000;
            height: 210px;
        }
        .panel ul {
            margin-top: 17px; margin-left:70px; padding: 0;list-style: none;
        }
        .panel ul li {
            padding: 15px;
        }
        .ibox-content {
            margin: 0;padding: 0;font-size: 14px;display: none;
        }
        .ibox-content ol {
            list-style: none;
        }
        .ibox-content ol li span {
            margin-right: 10px;color: #00C1B3;
        }
        .fa-sun-o {
            float:right;
        }
        #zx {
         overflow-y:scroll;
        }
        li{
            list-style: none;
        }
        /*.wrap{
            width: 1000px;
            height: 500px;
            margin: 0 auto;
            position: relative;
        }*/
        .box{
            width: 850px;
            height: 90px;
            background: #999;
            position: absolute;
            left: 0;
            bottom: 0;
        }
        .box .a{
            width: 540px;
            height: 90px;
            float: left;
            overflow: hidden;
            position: absolute;
            left: 0;
            bottom: 0;
        }
        .box .a span{
            height: 80px;
            width: 80px;
            background: #ff0;
            border-radius: 5px;
            display: block;
            float: left;
            margin: 5px;
        }
        .dian1{
            display: block;
            width: 20px;
            height: 80px;
            float: left;
            border: 1px solid #000;
            border-radius: 5px;
            box-sizing: border-box;
            margin: 5px;
            color: #000;
            text-align: center;
            line-height: 80px;
            position: absolute;
            left: 540px;
            bottom: 0;
        }
        .b{
            height: 80px;
            width: 150px;
            background: #f00;
            position: absolute;
            left: 570px;
            bottom: 0;
            margin: 5px 10px;
            border-radius: 5px;
            border: 1px solid #000;
            box-sizing: border-box;
        }
        .b ul{
            position: absolute;
            left: 0px;
            bottom: 100%;
            width: 200px;
            height: 370px;
            border: 1px solid #000;
            border-bottom: none;
            padding-top: 10px;
            box-sizing: border-box;
            border-radius: 5px 5px 0 0;
            margin-bottom: -8px;
            display: none;
        }
        .b ul li{
            height: 50px;
            padding-left: 30px;
            box-sizing: border-box;
            line-height: 50px;
            color:#0f0;
        }
        .b span{
            width: 90px;
            height: 80px;
            display: block;
            line-height: 80px;
            float: left;
        }
        .b .dian2{
            display: block;
            width: 20px;
            height: 80px;
            float: left;
            border-radius: 5px;
            box-sizing: border-box;
            margin: 0 5px;
            color: #000;
            text-align: center;
            line-height: 80px;
        }
        *{
            margin: 0;
            padding: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="left-memu">
        <div class="bs-glyphicons">
        <ul class="bs-glyphicons-list">
            <li>
                <span class="glyphicon glyphicon-home" aria-hidden="true" ></span>
                <span class="glyphicon-class">主页</span>
            </li>
            <li>
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="glyphicon-class">个人</span>
            </li>
            <li>
                <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
                <span class="glyphicon-class">歌舞</span>
            </li>
            <li>
                <span class="glyphicon glyphicon-knight" aria-hidden="true"></span>
                <span class="glyphicon-class">脱口秀</span>
            </li>
            <li>
                <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                <span class="glyphicon-class">户外</span>
            </li>
            <li>
                <span class="glyphicon glyphicon-scale" aria-hidden="true"></span>
                <span class="glyphicon-class">手游</span>
            </li>
            <li>
                <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>
                <span class="glyphicon-class">端游</span>
            </li>
            <li>
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                <span class="glyphicon-class">其他</span>
            </li>
            <li>
                <span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>
                <span class="glyphicon-class">二维码</span>
            </li>
        </ul>
        </div>
    </div>
    <div class="video-div">
        <div class="userInfo">

                <a class="cover" href="#" target="_blank">
                    <span class="w-liveplayer-sprite"></span>
                    <img src="{{URL::asset('/home/images/1.jpg')}}" alt="yy"/>
                </a>
                <div class="basic">
                    <div id="cherishIcon" class="icon-identity">
                        <a class="name" href="#" target="_blank">{{$username}}</a>
                    </div>
                    <div class="intro" style="display: block;">
                        在线：<span id="num_people">0</span>
                    </div>
                </div>
				<div class="concern">
					<a class="btn btn-white btn-bitbucket" id="guard_show" data-toggle="modal" data-target="#myModal">
                       <i class="fa fa-heart"></i> 守护
                    </a>
					<a class="btn btn-white btn-bitbucket" id="attention">
					@if(!empty($users['username']))
						@if($users['con_status'] == '0')
							<i class="fa fa-star"></i> 关注
						@else
							<i class="fa fa-star"></i> 已关注
						@endif
					@else
						<i class="fa fa-star"></i> 关注
					@endif

						
                    </a>
					@if(!empty($users['username']))
						<input type="hidden" id="guser" value="{{ $users['user_id'] }}" />
					@else
						<input type="hidden" id="guser" value="" />
					@endif
				</div>
             
        </div>
        <video id="example_video_1" class="video-js vjs-default-skin" autoplay="autoplay"  width="640" height="480" data-setup="{}">
            <source src="rtmp://192.168.1.211/live/{{$id}}" type="rtmp/flv"/>
        </video>
        {{--<div id="div-img"><img src="{{URL::asset('/home/img/sheji40_p.jpg')}}" alt="" width="850"/></div>--}}
        <div id="send_giff" style="position:absolute;left:80px;top:400px;width:400px;height:50px;z-index:20000;display:none;color:#0ff;">

        </div>
    </div>
    <input type="hidden" id="da_user">
    <input type="hidden" id="da_src">
    <input type="hidden" id="da_num">
    <input type="hidden" id="da_sum" value="0">
    <input type="hidden" id="da_time" value="0">
    <div class="msg-div">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> 守护榜</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">贡献榜</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">贵宾席</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">在线</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel">
                            <ul>
                                <?php $number = 0;?>
                                @foreach ($guard as $key => $val)
                                    <?$number++?>
                                    @if($number<=3)
                                    <li>{{$key}}({{$val}})</li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="ibox-content">
                                <ol>
                                    <?php $num = 0;?>
                                    @foreach ($guard as $key => $val)
                                        <?$num++?>
                                        @if($num > 3)
                                            <li><span >{{$num}}.</span>{{$key}}({{$val}})</li>
                                        @endif
                                    @endforeach

                                </ol>
                            </div>
                        </div>

                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel">
                            <ul>
                                <?php $number = 0;?>
                                @foreach ($devote as $key => $val)
                                    <?$number++?>
                                    @if($number<=3)
                                        <li>{{$key}}({{$val}})</li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="ibox-content">
                                <ol>
                                    <?php $num = 0;?>
                                    @foreach ($devote as $key => $val)
                                        <?$num++?>
                                        @if($num > 3)
                                            <li><span >{{$num}}.</span>{{$key}}({{$val}})</li>
                                        @endif
                                    @endforeach

                                </ol>
                            </div>
                        </div>

                    </div>
                    <div id="tab-3" class="tab-pane">
                        <div class="panel">
                            <ul>
                                <?php $number = 0;?>
                                @foreach ($vip as $key => $val)
                                    <?$number++?>
                                    @if($number<=3)
                                        <li>{{$key}}({{$val}})</li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="ibox-content">
                                <ol>
                                    <?php $num = 0;?>
                                    @foreach ($vip as $key => $val)
                                        <?$num++?>
                                        @if($num > 3)
                                            <li><span >{{$num}}.</span>{{$key}}({{$val}})</li>
                                        @endif
                                    @endforeach

                                </ol>
                            </div>
                        </div>

                    </div>
                    <div id="tab-4" class="tab-pane">
                        <div id="zx" style="background: #ffffff;height:210px;font-size: 18px;line-height:30px;padding-left: 18px;padding-top: 18px;">
                        </div>
                    </div>
                </div>
            </div>

    </div>

    <div class="chat-div">

        <div id="ltian">
            <div id="ct"></div>
            <a href="javascript:void(0)" class="qp" onClick="this.parentNode.children[0].innerHTML=''">清屏</a>
        </div>
        <div class="rin">
            <button id="sd">发送</button>
            <span><img src="{{URL::asset('/home/sk/t.png')}}" title="表情" id="imgbq"></span>
            <p><input id="nrong"></p>
        </div>
        <div id="ems"><p></p><p class="tc"></p></div>
        <script src="{{URL::asset('/home/sk/jquery-3.1.1.min.js')}}"></script>
        <script>
            if(typeof(WebSocket)=='undefined'){
                alert('你的浏览器不支持 WebSocket ，推荐使用Google Chrome 或者 Mozilla Firefox');
            }
        </script>
        <script src="{{URL::asset('/home/sk/a.js')}}" type="text/javascript"></script>
        <script>
            $(function(){
                var key='all',mkey;
                var users={};
                var url='ws://192.168.1.76:8000';
                so=false,n=false;
                so=new WebSocket(url);
                var lus=A.$('zx'),lct=A.$('ct');
                function st(){
                    var Arr1 = ["聪明的","狡猾的","可爱的","美丽的","狡猾的","善良的","帅气的","逗比的"];
                    var Arr2 = ["大灰狼","小白兔","母老虎","外星人","皮卡丘","HelloKitty","吴亦凡","薛之谦"];
                    var ran1 = Math.floor(Math.random() * Arr1.length + 1)-1;
                    var ran2 = Math.floor(Math.random() * Arr2.length + 1)-1;
                    var n='游客   '+Arr1[ran1]+Arr2[ran2];
                    var user = "{{$users['username']}}";
                    if(!n){
                        return ;
                    }
                    var user = arguments[0] ? arguments[0] : user;
                    var giff_name = arguments[1] ? arguments[1] : '';
                    var giff_num = arguments[2] ? arguments[2] : '';
                    var giff_src = arguments[3] ? arguments[3] : '';
                    so.onopen=function(){
                        if(so.readyState==1){
                            if(user){
                                so.send('type=add&ming='+user);
                            }else{
                                so.send('type=add&ming='+n);
                            }
                        }
                    }
                    so.onmessage=function(msg){
                        eval('var da='+msg.data);
                        var obj=false,c=false;
                        if(da.type=='add'){
                            var obj=A.$$('<p>'+da.name+'</p>');
                            lus.appendChild(obj);
                            cuser(obj,da.code);
                            obj=A.$$('<p><span>['+da.time+']</span>欢迎1<a>'+da.name+'</a>加入</p>');
                            var nums = $('#num_people').text()
                            $('#num_people').text(parseInt(nums)+1);
                            c=da.code;
                        }else if(da.type=='madd'){
                            mkey=da.code;
                            da.users.unshift({'code':'all','name':''});
                            for(var i=0;i<da.users.length;i++){
                                var obj=A.$$('<p>'+da.users[i].name+'</p>');
                                lus.appendChild(obj);
                                if(mkey!=da.users[i].code){
                                    cuser(obj,da.users[i].code);
                                }else{
                                    obj.className='my';

                                }
                            }
                            obj=A.$$('<p><span>['+da.time+']</span>欢迎'+da.name+'加入</p>');
                            $('#num_people').text(parseInt(da.users.length)-1);
                            users.all.className='ck';
                        }
                        if(da.type=='giff'){
                            $('#send_giff').show();
                            var da_user = $('#da_user').val();
                            var da_src = $('#da_src').val();
                            var da_num = $('#da_num').val();
                            var da_sum = $('#da_sum').val();
                            var da_time = $('#da_time').val();
                            //当前时间戳
                            var timestamp = Date.parse(new Date());
                            if(da_user == da.user && da_src==da.giff_src && da_num == da.giff_num && ((parseInt(timestamp)-parseInt(da_time))<3000)){
                                $('#send_giff').html(da.user+'送出<img src="'+da.giff_src+'"  width="85" height="75">'+da.giff_num+'X'+(parseInt(da_sum)+1));
                                $('#da_sum').val((parseInt(da_sum)+1));
                                $('#da_time').val(timestamp);
                            }else{
                                $('#send_giff').html(da.user+'送出<img src="'+da.giff_src+'"  width="85" height="75">'+da.giff_num+'X1');
                                $('#da_user').val(da.user);
                                $('#da_src').val(da.giff_src);
                                $('#da_num').val(da.giff_num);
                                $('#da_time').val(timestamp);
                                $('#da_sum').val(1);
                            }
                            obj = true;
                        }
                        if(obj==false){
                            if(da.type=='rmove'){
                                var name = users[da.nrong].innerHTML;
                                var anchor_id = "{{$user_id}}";
                                var obj=A.$$('<p class="c2"><span>['+da.time+']</span>'+users[da.nrong].innerHTML+'退出聊天室</p>');
                                var num = $('#num_people').text()
                                $('#num_people').text(parseInt(num)-1);
                                //console.log(type);
                                lct.appendChild(obj);
                                users[da.nrong].del();
                                delete users[da.nrong];
                                var username = name.substr(0,2);
                                if(username != '游客'){
                                    $.ajax({
                                        url  : '{{url('liveroom/change_vip')}}',
                                        type : 'get',
                                        data : {username:name,anchor_id:anchor_id},
                                        dataType: 'json',
                                        success:function(data){
                                            if(data){
                                                var num =  0;
                                                var number =0;
                                                var str = '<div class="panel"><ul>';
                                                $.each(data,function(k,v){
                                                    num ++;
                                                    if(num <=3){
                                                        str += '<li>'+k+'('+v+')</li>'
                                                    }
                                                })
                                                str += '</ul><div class="ibox-content"><ol>'
                                                $.each(data,function(k,v){
                                                    number ++;
                                                    if(number > 3&&number<=10){
                                                        str += '<li><span >'+number+'</span>'+k+'('+v+')</li>'
                                                    }
                                                })
                                                str += '</ol></div></div>';
                                                $('#tab-3').html(str);
                                            }

                                        }
                                    })
                                }
                            }else{
                                da.nrong=da.nrong.replace(/{\\(\d+)}/g,function(a,b){
                                    return '<img src="http://www.live.com/public/home/sk/'+b+'.jpg">';
                                }).replace(/^data\:image\/png;base64\,.{50,}$/i,function(a){
                                    return '<img src="'+a+'">';
                                });
                                //da.code 发信息人的code
                                if(da.code1==mkey){
                                    obj=A.$$('<p class="c3"><span>['+da.time+']</span><a>'+users[da.code].innerHTML+'</a>对我说：'+da.nrong+'</p>');
                                    //console.log(users);
                                    c=da.code;
                                }else if(da.code==mkey){
                                    console.log(msg)
                                    if(da.code1!='all')
                                        obj=A.$$('<p class="c3"><span>['+da.time+']</span>我对1<a>'+users[da.code1].innerHTML+'</a>说：'+da.nrong+'</p>');
                                    else
                                        obj=A.$$('<p><span>['+da.time+']</span>'+user+'<a>'+users[da.code1].innerHTML+'</a>说：'+da.nrong+'</p>');
                                    c=da.code1;
                                }else if(da.code==false){
                                    obj=A.$$('<p><span>['+da.time+']</span>'+da.nrong+'</p>');
                                }else if(da.code1){
                                    obj=A.$$('<p><span>['+da.time+']</span><a>'+users[da.code].innerHTML+'</a>对'+users[da.code1].innerHTML+'说：'+da.nrong+'</p>');
                                    c=da.code;
                                }
                            }
                        }

                        if(c){
                            obj.children[1].onclick=function(){
                                users[c].onclick();
                            }
                        }
                        lct.appendChild(obj);
                        lct.scrollTop=Math.max(0,lct.scrollHeight-lct.offsetHeight);
                    }
                }

                //展示礼物
                $('#send').on('click',function(){
                    var giff_val = $('#giff_val').val();
                    var giff_src = $('#giff_src').val();
                    var giff_name = $('#giff_name').val();
                    var giff_id = $('#giff_id').val();
                    var giff_num = $('#giff_num').val();
                    var anchor_id = "<?=$user_id?>";
                    var id = "<?=$id;?>"
                    var user = "{{$users['username']}}";
                    var balance = "{{$users['balance']}}"
                    if(user == ''){
                        alert('请先登陆')
                    }else if(balance<(giff_val*giff_num)){
                        if(confirm("你当前余额不足，是否立刻充值")){
                            location.href="per/getshow";
                        }else{
                            return;
                        }
                        //alert('余额不足，请先重置');
                    }else{
                        $.ajax({
                            url:'sendGiff',
                            type:'get',
                            data:{giff_price:giff_val, giff_id:giff_id, anchor_id:anchor_id, giff_num:giff_num, id:id},
                            dataType:'json',
                            success:function(){
                                if(user!=''&&giff_name!=''&&giff_num!=''&&giff_src!='') {
                                    if(!so){
                                        return st();
                                    }
                                    balance = (balance - giff_val) * giff_num;
                                    so.send('type=giff&giff_name='+giff_name+'&giff_num='+giff_num+'&giff_src='+giff_src+'&user='+user+'&key='+key);
                                }
                            }
                        })
                    }
                })
                A.$('sd').onclick=function(){
                    if(!so){
                        return st();
                    }
                    var da=A.$('nrong').value.trim();
                    if(da==''){
                        alert('内容不能为空');
                        return false;
                    }
                    A.$('nrong').value='';
                    so.send('nr='+esc(da)+'&key='+key);
                }
                A.$('nrong').onkeydown=function(e){
                    var e=e||event;
                    if(e.keyCode==13){
                        A.$('sd').onclick();
                    }
                }
                function esc(da){
                    da=da.replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;');
                    return encodeURIComponent(da);
                }
                function cuser(t,code){
                    users[code]=t;
                    t.onclick=function(){
                        t.parentNode.children.rcss('ck','');
                        t.rcss('','ck');
                        key=code;
                    }
                }
                A.$('ltian').style.height=(document.documentElement.clientHeight - 310)+'px';
                st();


                var bq=A.$('imgbq'),ems=A.$('ems');
                var l=80,r=4,c=5,s=0,p=Math.ceil(l/(r*c));
                var pt='http://www.live.com/public/home/sk/';
                bq.onclick=function(e){
                    var e=e||event;
                    if(!so){
                        return st();
                    }
                    ems.style.display='block';
                    document.onclick=function(){
                        gb();
                    }
                    ct();
                    try{e.stopPropagation();}catch(o){}
                }

                for(var i=0;i<p;i++){
                    var a=A.$$('<a href="javascript:;">'+(i+1)+'</a>');
                    ems.children[1].appendChild(a);
                    ef(a,i);
                }
                ems.children[1].children[0].className='ck';

                function ct(){
                    var wz=bq.weiz();
                    with(ems.style){
                        top=140+'px';
                        left=40+'px';
                    }
                }

                function ef(t,i){
                    t.onclick=function(e){
                        var e=e||event;
                        s=i*r*c;
                        ems.children[0].innerHTML='';
                        hh();
                        this.parentNode.children.rcss('ck','');
                        this.rcss('','ck');
                        try{e.stopPropagation();}catch(o){}
                    }
                }

                function hh(){
                    var z=Math.min(l,s+r*c);
                    for(var i=s;i<z;i++){
                        var a=A.$$('<img src="'+pt+i+'.jpg">');
                        hh1(a,i);
                        ems.children[0].appendChild(a);
                    }
                    ct();
                }

                function hh1(t,i){
                    t.onclick=function(e){
                        var e=e||event;
                        A.$('nrong').value+='{\\'+i+'}';
                        if(!e.ctrlKey){
                            gb();
                        }
                        try{e.stopPropagation();}catch(o){}
                    }
                }

                function gb(){
                    ems.style.display='';
                    A.$('nrong').focus();
                    document.onclick='';
                }
                hh();
                A.on(window,'resize',function(){
                    A.$('ltian').style.height=(document.documentElement.clientHeight - 70)+'px';
                    ct();
                })

                var fimg=A.$('upimg');
                var img=new Image();
                var dw=400,dh=300;
                A.on(fimg,'change',function(ev){
                    if(!so){
                        st();
                        return false;
                    }
                    if(key=='all'){
                        alert('由于资源限制 发图只能私聊');
                        return false;
                    }
                    var f=ev.target.files[0];
                    if(f.type.match('image.*')){
                        var r = new FileReader();
                        r.onload = function(e){
                            img.setAttribute('src',e.target.result);
                        };
                        r.readAsDataURL(f);
                    }
                });
                img.onload=function(){
                    ih=img.height,iw=img.width;
                    if(iw/ih > dw/dh && iw > dw){
                        ih=ih/iw*dw;
                        iw=dw;
                    }else if(ih > dh){
                        iw=iw/ih*dh;
                        ih=dh;
                    }
                    var rc = A.$$('canvas');
                    var ct = rc.getContext('2d');
                    rc.width=iw;
                    rc.height=ih;
                    ct.drawImage(img,0,0,iw,ih);
                    var da=rc.toDataURL();
                    so.send('nr='+esc(da)+'&key='+key);
                }

            })();
        </script>
    </div>
    <div class="gift-div">
        <div class="box">
            <div class="a">
                <?php foreach($gift as $k=>$v){ ?>
                <span><img src="<?=$v['img_path'];?>" alt="" price="<?=$v['price'];?>" width="85" height="75" ids="<?=$v['gift_id'];?>" names="<?=$v['giftname'];?>"></span>
                <?php }?>
                <input type="hidden" value="" id="giff_val">
                <input type="hidden" value="" id="giff_src">
                <input type="hidden" value="" id="giff_name">
                <input type="hidden" value="" id="giff_id">
            </div>
            <a href="javascript:void(0)" class="dian1">^</a>
            <div class="b">
                <ul>
                    <li>1</li>
                    <li>10(十全十美)</li>
                    <li>30(想你)</li>
                    <li>66(一切顺利)</li>
                    <li>188(要抱抱)</li>
                    <li>520(我爱你)</li>
                    <li>1314(一生一世)</li>
                </ul>
                <span class="tu"><input type="text" id="giff_num"></span>
                <a href="javascript:void(0)" class="dian2">^</a>
            </div>
            <div  stype="width:60px;height:40px;">
                <button style="margin-top:30px;margin-right: 20px;" id="send">赠送</button>
    <div class="gift-div"></div>
	<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content animated bounceInRight">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
					</button>
					<h4 class="modal-title">守护主播</h4>
					</div>
					<div class="modal-body" style="padding-bottom:1px;">
						<div class="form-group" style="height: 32px;">
                                <label class="col-sm-2 control-label" style="padding: 6px 10px;">守护主播</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled="" placeholder="{{$username}}" class="form-control">
                                </div>
                         </div>
						 <div id="zhan" style="height:50px;display:none;">
							<label class="col-sm-2 control-label" style="padding: 6px 10px;">到期时间</label>
							<div class="col-sm-10">
                                    <p id="showd">dfsdfsdfds</p>	
                            </div>
							<span style="color:red;margin-left: 14px;">注意:如果需要续费请选择下方的守护时间与金额进行充值</span>
						 </div>
						 <div class="form-group"  style="height: 32px;">
								<label class="col-sm-2 control-label" style="padding: 6px 10px;">守护时间</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" id="starttime" name="account">
										<option value="0">--请选择--</option>
                                        <option value="1">1个月</option>
                                        <option value="3">3个月</option>
                                        <option value="4">6个月</option>
                                        <option value="12">1年</option>
                                    </select>
                                </div>
                         </div>
						 <div class="form-group"  style="height: 32px;">
								<label class="col-sm-2 control-label" style="padding: 6px 10px;">守护金额</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" id="guard_money" name="account">
										<option value='0'>--请选择--</option>
                                        <option value="188">188</option>
                                        <option value="388">388</option>
                                        <option value="688">688</option>
                                        <option value="88888">88888</option>
                                    </select>
                                </div>
                         </div>
						 <div class="form-group"  style="height: 32px;">
								<label class="col-sm-2 control-label" style="padding: 6px 10px;">充值金额</label>
                                <div class="col-sm-10">
                                    <div class="m-t-xs font-bold" id="z_money" ></div>
									<input type="hidden" id="gmoney" />
									<input type="hidden" id="live_id" value="{{ $user_id }}"/>
                                </div>
                         </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
						<button type="button" id="guard_btn" class="btn btn-primary">充值</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--登陆窗口-->
<div id="loginWrap" class="login-box" style="height:480px;"><button style=" float: right;height: 20px;margin-right: 5px; margin-top: 5px; width: 20px;" id="close">X</button>
 <div class="login">
        <div class="login-main">
            <div class="login-hd"><a href="javascript:void(0);" id="login-btn" class="tab-btn active" rel="nofollow">登录</a><a href="javascript:void(0);" id="register-btn" class="tab-btn" rel="nofollow">注册</a><i id="line" class="line"></i></div>
            <div class="login-bd">
                <div class="login-content">
                  <div class="yin">
                    <div class="tab-unit active">
                        <div id="login-tab">
                            <div class="login-title" style="width: 400px;height: 600px;">
                            YY帐号登录  
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                       <td>
                                             <input  placeholder="&nbsp;&nbsp;帐号\邮箱\手机号" type="text" class='input_style' style ="margin-bottom:20px;" id="account">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input  placeholder="&nbsp;&nbsp;密码" type="password" class='input_style' id="passwords"></td>
                                    </tr>
                                    <tbody class="tbody"></tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript:;" class="reg_btn" id="login_do">登录</a>
                                       </td>
                                    </tr>
                                </table>
                            </div>                                    
                        </div>
                        </div>
                    </div>

     <div class="register" style="display:none">

       <table>
            <tr class="yan_tr">
                <td><input type="text" name="username" id="username" placeholder="&nbsp;&nbsp;您的账户名和登录名" class='input_style' style="margin-top:10px;" >  <span class="yan_sp" id="user"></span>    
                </td>       
            </tr>
            <tr class="yan_tr">
                <td><input type="password" name="password" id="set" placeholder="&nbsp;&nbsp;密码：建议至少两种字符组合" class='input_style'><span class="yan_sp" id="password"></span></td>
            </tr>
            <tr class="yan_tr">
                <td><input type="password" name="pwd" id="reset" placeholder="&nbsp;&nbsp;请再次输入密码" class='input_style'><span class="yan_sp" id="pwd"></span></td>
            </tr>
            <tr class="yan_tr">
                <td><input type="text" name="telephone" id="telephone" placeholder="&nbsp;&nbsp;建议使用常用手机" class='input_style'><span class="yan_sp" id="tel"></span></td>
            </tr>
            <tr class="yan_tr">
                <td>
					<input type="text" name="captcha" placeholder="&nbsp;&nbsp;请输入验证码" class='input_style'>
					
					<a id="re_captcha" >
						<img src="verify/1" alt="验证码" title="刷新图片" width="100" height="40" id="verify" border="0">
					</a>
                </td>
            </tr>
			<tr>
				<td><span class="yan_sp" id="aa"></span></td>
			</tr>
            <tr class="yan_tr">
                <td>
					<input type="text" name="tel_yan" placeholder="&nbsp;&nbsp;请输入手机验证码
					" class='input_style' id="confirm">
					<input type="button" style="font-size: 12px;height:32px;width:70px;" value="获取验证码" onclick="sendCode(this)" />
					<span class="yan_sp" id="yan"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input class="jj" type="checkbox">阅读并同意<a href="" style='text-decoration:none;'> 《直播协议》&nbsp;</a><a href="" style='text-decoration:none;'> 《隐私注册》 </a></td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" value="立即注册" class="reg_btn" id="submit"></td>
            </tr>
        </table>
                </div>

                 </div>
                </div>
            </div>
        </div>
        <div class="login-sidebar">
            <div class="title"> 第三方帐号登录</div>
            <div class="other-login"><a href="javascript:void(0);" class="qqlogin">QQ帐号登录</a>
            </div>
            <div class="protocol">
                <p>登录前请仔细阅读<a href="//zc.yy.com/license.html" target="_blank">《用户服务协议》</a>
                </p>
            </div>
        </div>
    </div>
    
</div>
</body>
<script>
    $(function(){
        $(document).on('mouseover','.panel',function(){
            $('.ibox-content').show();
        })
        $(document).on('mouseout','.panel',function(){
            $('.ibox-content').hide();
        })
		$('#login-btn').click(function(){
			$(this).addClass('active');
			$('#register-btn').removeClass('active');
			$('#line').css('left','0px');
		})
		$('#register-btn').click(function(){
			$(this).addClass('active');
			$('#login-btn').removeClass('active');
			$('#line').css('left','88px');
		})
    })
</script>
<script src="{{URL::asset('/home/js/jquery-1.7.2.min.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $(".dian1").toggle(function(){
            $(".a").animate({"height":"180px"},1000);
            $(this).addClass("dian11")
        },function(){
            $(".a").animate({"height":"90px"},1000);
            $(this).removeClass("dian11")
        })
        $(".dian2").toggle(function(){
            $(".b ul").stop(true,true).slideDown();
        },function(){
            $(".b ul").stop(true,true).slideUp();
        })
        $(".a span").click(function(){
            $(".a").animate({"height":"90px"},1000);
            var giff_price = $(this).children().attr('price');
            var giff_src = $(this).children().prop('src');
            var giff_name = $(this).children().attr('names');
            var giff_id = $(this).children().attr('ids');
            $('#giff_val').val(giff_price);
            $('#giff_src').val(giff_src);
            $('#giff_name').val(giff_name);
            $('#giff_id').val(giff_id);
            $(".dian1").removeClass("dian11");
            $(".b ul").stop(true,true).slideDown();
        })
        $(".b ul li").click(function(){
            var thisText = $(this).text();
            $("#giff_num").attr("value",parseInt(thisText));
            $(".b ul").stop(true,true).slideUp();
        })
        //隐藏div
        function div_none(){
            //alert(1);
            var times = Date.parse(new Date());
            var datime = $('#da_time').val();
            if((times-datime)>2000){
                $('#send_giff').hide();
            }
        }
        setInterval(div_none,5000);
    })
</script>
<script type="text/javascript" src="{{ URL::asset('/home/js/news.js') }}"></script>
</html>