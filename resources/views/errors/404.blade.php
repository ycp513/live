<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 404 页面</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{URL::asset('home/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('home/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{URL::asset('home/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('home/css/style.css?v=4.1.0')}}" rel="stylesheet">

</head>

<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
        <h1>404</h1>
        <h3 class="font-bold">页面未找到！</h3>

        <div class="error-desc">
            抱歉，页面好像去火星了~
                <a href="{{url('index/index')}}"><button class="btn btn-primary">返回首页</button></a>
        </div>
    </div>

    <!-- 全局js -->
    <script src="{{URL::asset('home/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{URL::asset('home/js/bootstrap.min.js?v=3.3.6')}}"></script>

    
    

</body>

</html>
