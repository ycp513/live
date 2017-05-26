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
    <!-- 自定义js -->
    <script src="{{URL::asset('/home/js/content.js?v=1.0.0')}}"></script>
    <script>
        videojs.options.flash.swf = "{{URL::asset('/home/video/video-js.swf')}}";
    </script>
    <style>
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
        width: 300px;height: 300px;position: absolute;left:912px;z-index: 300;
        }
        .chat-div{
        width: 300px;height: 390px;background: #2ca02c;position: absolute;left:912px;top:260px;z-index: 50;
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
                        在线:
                        <span id="onlineCount" class="num">7,079</span>
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
                </div>
            </div>

    </div>
    <div class="chat-div"></div>
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