<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 联系人</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
   <link href="{{ URL::asset('/admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">

    <link href="{{ URL::asset('/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/admin/css/style.css?v=4.1.0') }}" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            @if(isset($data))
            @foreach($data as $k => $v)
            <div class="col-sm-4">
                <div class="contact-box">
                    <a href="javascript:void(0)">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="img/a2.jpg">
                                <div class="m-t-xs font-bold">{{$v->cate}}</div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong>{{$v->username}}</strong></h3>
                            <p>直播开始：<i class="fa fa-map-marker"></i>{{$v->start_time}}</p>
                             <p>直播结束：<i class="fa fa-map-marker"></i>{{$v->end_time}}</p>
                               <p>直播日期：<i class="fa fa-map-marker"></i>{{$v->live_date}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </a>
        </div>
    </div>
                @endforeach
                @endif
        </div>
    </div>

    <!-- 全局js -->
     <script src="{{URL::asset('/admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{URL::asset('/admin/js/bootstrap.min.js?v=3.3.6')}}"></script>

    <!-- 自定义js -->
    <script src="{{URL::asset('/admin/js/content.js?v=1.0.0')}}"></script>


    <script>
        $(document).ready(function () {
            $('.contact-box').each(function () {
                animationHover(this, 'pulse');
            });
        });
    </script>

    
    

</body>

</html>
