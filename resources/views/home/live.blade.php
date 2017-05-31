<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico"> <link href="{{URL::asset('/home/css/bootstrap.min.css?v=3.3.6')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/css/font-awesome.css?v=4.4.0')}}" rel="stylesheet">

    <link href="{{URL::asset('/home/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/css/style.css?v=4.1.0')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/video/video-js.css')}}" rel="stylesheet" type="text/css">

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
        width: 850px;height: 90px;background: #28a4c9;position: absolute;left:60px;top: 610px;
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
                <div class="concern"><button class="btn btn-danger  dim" type="button"><i class="fa fa-heart">关注</i>
                    </button></div>
        </div>
        <video id="example_video_1" class="video-js vjs-default-skin" autoplay="autoplay"  width="640" height="480" data-setup="{}">
            <source src="rtmp://192.168.1.211/live/{{$id}}" type="rtmp/flv"/>
        </video>
        {{--<div id="div-img"><img src="{{URL::asset('/home/img/sheji40_p.jpg')}}" alt="" width="850"/></div>--}}
    </div>
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
                                <li> 苞米地的秘密</li>
                                <li> 苞米地之二狗子</li>
                                <li> 苞米地之疯狗</li>
                            </ul>
                            <div class="ibox-content">
                                <ol>
                                    <li><span >4.</span>   每个人都有一个死角</li>
                                    <li><span >5.</span>   我把最深沉的</li>
                                    <li><span >6.</span>   你不懂我。</li>
                                    <li><span >7.</span>   有一道伤口</li>
                                    <li><span >8.</span>   死角， 自己走不出来。</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel">
                            <ul>
                                <li> 夏鹏飞 <i class="fa fa-sun-o" >66666</i> </li>
                                <li> 聂士杰 <i class="fa fa-sun-o">54671</i> </li>
                                <li> 苞米地之疯狗 <i class="fa fa-sun-o"> 53125</i></li>
                            </ul>
                            <div class="ibox-content">
                                <ol>
                                    <li><span >4.</span>   每个人都有一个死角</li>
                                    <li><span >5.</span>   我把最深沉的</li>
                                    <li><span >6.</span>   你不懂我。</li>
                                    <li><span >7.</span>   有一道伤口</li>
                                    <li><span >8.</span>   死角， 自己走不出来。</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane">
                        <div class="panel">
                            <ul>
                                <li> 张伯伦（V10）</li>
                                <li> 闫朝沛(v8)</li>
                                <li> 李洁(v7)</li>
                            </ul>
                            <div class="ibox-content">
                                <ol>
                                    <li><span >4.</span>   每个人都有一个死角</li>
                                    <li><span >5.</span>   我把最深沉的</li>
                                    <li><span >6.</span>   你不懂我。</li>
                                    <li><span >7.</span>   有一道伤口</li>
                                    <li><span >8.</span>   死角， 自己走不出来。</li>
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
            (function(){
                var key='all',mkey;
                var users={};
                var url='ws://192.168.1.95:8000';
                var so=false,n=false;
                var lus=A.$('zx'),lct=A.$('ct');
                function st(){
                    var Arr1 = ["聪明的","狡猾的","可爱的","美丽的","狡猾的","善良的","帅气的","逗比的"];
                    var Arr2 = ["大灰狼","小白兔","母老虎","外星人","皮卡丘","HelloKitty","吴亦凡","薛之谦"];
                    var ran1 = Math.floor(Math.random() * Arr1.length + 1)-1;
                    var ran2 = Math.floor(Math.random() * Arr2.length + 1)-1;
                    var n=Arr1[ran1]+Arr2[ran2];
                    //以上五行是用来随机生成用户昵称的方法，参考一下 ，如果想自定义用户名可以将以上五行注释，然后以下两行取消注释
                    //n=prompt('请给自己取一个霸气的名字：');
                    //n=n.substr(0,16);
                    //console.log(n);
                    if(!n){
                        return ;
                    }
                    so=new WebSocket(url);
                    so.onopen=function(){
                        if(so.readyState==1){
                            so.send('type=add&ming='+n);
                        }
                    }

                    so.onclose=function(){
                        so=false;
                        lct.appendChild(A.$$('<p class="c2">退出聊天室</p>'));
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
                                    document.title=da.users[i].name;
                                }
                            }
                            obj=A.$$('<p><span>['+da.time+']</span>欢迎'+da.name+'加入</p>');
                            //console.log(da.users);
                            $('#num_people').text(parseInt(da.users.length)-1);
                            users.all.className='ck';
                        }

                        if(obj==false){
                            if(da.type=='rmove'){
                                var obj=A.$$('<p class="c2"><span>['+da.time+']</span>'+users[da.nrong].innerHTML+'退出聊天室</p>');
                                var num = $('#num_people').text()
                                $('#num_people').text(parseInt(num)-1);
                                //console.log(type);
                                lct.appendChild(obj);
                                users[da.nrong].del();
                                delete users[da.nrong];
                                //console.log(msg)
                            }else{
                                da.nrong=da.nrong.replace(/{\\(\d+)}/g,function(a,b){
                                    return '<img src="http://www.live.com/public/home/sk/'+b+'.jpg">';
                                }).replace(/^data\:image\/png;base64\,.{50,}$/i,function(a){
                                    return '<img src="'+a+'">';
                                });
                                //da.code 发信息人的code
                                if(da.code1==mkey){
                                    obj=A.$$('<p class="c3"><span>['+da.time+']</span><a>'+users[da.code].innerHTML+'</a>对我说：'+da.nrong+'</p>');
                                    c=da.code;
                                }else if(da.code==mkey){
                                    if(da.code1!='all')
                                        obj=A.$$('<p class="c3"><span>['+da.time+']</span>我对<a>'+users[da.code1].innerHTML+'</a>说：'+da.nrong+'</p>');
                                    else
                                        obj=A.$$('<p><span>['+da.time+']</span>我对<a>'+users[da.code1].innerHTML+'</a>说：'+da.nrong+'</p>');
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
    <div class="gift-div"></div>
</body>
<script>
    $(function(){
        $('.panel').mouseover(function(){
            $('.ibox-content').toggle();
        })
        $('.panel').mouseout(function(){
            $('.ibox-content').toggle();
        })
    })
</script>
</html>