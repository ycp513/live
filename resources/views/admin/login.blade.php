<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{URL::asset('/admin/css/bootstrap.min.css?v=3.3.6')}}" rel="stylesheet">
    <link href="{{URL::asset('/admin/css/font-awesome.css?v=4.4.0')}}" rel="stylesheet">

    <link href="{{URL::asset('/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/admin/css/style.css?v=4.1.0')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">h</h1>

            </div>
            <h3>欢迎登陆 二狗子直播后台</h3>

            <form class="m-t" role="form" action="{{url('login/login')}}" method="post">

                <div class="form-group">
                {{ csrf_field() }}
                    <input type="text" class="form-control" placeholder="用户名" id="username" name="username">
                    <span id="span1" style="color:red"><?php if(isset($msg)){ echo $msg; } ?></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="" name="pwd">
                    <span id="span2" style="color:red"><?php if(isset($ms)){ echo $ms; } ?></span>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


                <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>
                </p>

            </form>
        </div>
    </div>

    <!-- 全局js -->
    <script src="{{URL::asset('/admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{URL::asset('/admin/js/bootstrap.min.js?v=3.3.6')}}"></script>    
    <script src="{{URL::asset('/admin/js/jquery-1.9.1.min.js')}}"></script>    

    <script>
     // $('#username').blur(function(){
     //    var username=$('#username').val();
     //    $.ajax({
     //        type:'get',
     //        url:'select_user',
     //        data:{username:username},
     //        success:function(msg)
     //         {
     //             if(msg==1){
     //                $('#span1').html()
     //             }else{
     //                 $('#span1').html("<p style='color:red'>用户名错误</p>")
     //             }
     //         }
     //    })
     // })
    </script>
    

</body>

</html>
