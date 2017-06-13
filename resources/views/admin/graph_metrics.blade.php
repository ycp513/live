<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 图表组合</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{ URL::asset('/admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
  

    <link href="{{ URL::asset('/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/admin/css/style.css?v=4.1.0') }}" rel="stylesheet">

</head>

<body class="gray-bg">


  <!-- 注册人数统计-->
  <div class="col-sm-6" style="width:100%">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户统计</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="notifications.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="notifications.html#">选项1</a>
                                </li>
                                <li><a href="notifications.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <!-- 包含-->
                       
        
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="ibox">

                                        <div class="ibox-content">
                                            <h5 class="m-b-md">注册人数</h5>
                                            <h2 class="text-navy">
                                                        <i class="fa fa-circle text-navy"></i> {{$data['register']}}
                                                    </h2>
                                            <small>更新时间：当前时间</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content ">
                                            <h5 class="m-b-md">在线人数</h5>
                                            <h2 class="text-navy">
                                                       <i class="fa fa-circle text-navy"></i>{{$dataList[1]}}
                                                    </h2>
                                            <small>更新时间：当前时间</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5 class="m-b-md">直播房间数</h5>
                                            <h2 class="text-danger">
                                                        <i class="fa fa-circle text-navy"></i> {{$data['direct']}}
                                                    </h2>
                                            <small>更新时间：当前时间</small>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                             <!-- 结束-->
                    </div>
                </div>
            </div>   
 
<!-- 在线人数统计-->
    <div class="col-sm-6" style="width:100%">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>在线人数折线图</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="notifications.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="notifications.html#">选项1</a>
                                </li>
                                <li><a href="notifications.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                       <!-- 包含-->
                                      <div class="row">
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>本日活跃量</h5>
                                            <h2>{{$dataList[1]}}</h2>
                                            <div id="sparkline1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>最近七天活跃量</h5>
                                            <h2>{{$dataList[2]}}</h2>
                                            <div id="sparkline2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>最近三十天活跃量</h5>
                                            <h2>{{$dataList[3]}}</h2>
                                            <div id="sparkline3"></div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                       <!--结束-->
                    </div>
                </div>
            </div>   

       

       <div class="col-sm-6" style="width:100%">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>交易额折线图</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="notifications.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="notifications.html#">选项1</a>
                                </li>
                                <li><a href="notifications.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                       <!-- 包含-->
                                      <div class="row">
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>本日交易额</h5>
                                            <h2>{{$live['monday']}}</h2>
                                            <div class="sparkline1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>本周交易额</h5>
                                            <h2>{{$live['week']}}</h2>
                                            <div class="sparkline2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>本月交易额</h5>
                                            <h2>{{$live['month']}}</h2>
                                            <div class="sparkline3"></div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                       <!--结束-->

                    </div>
                </div>
            </div>  
      
       <div class="col-sm-6" style="width:100%">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>主播分类交易额展示</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="notifications.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="notifications.html#">选项1</a>
                                </li>
                                <li><a href="notifications.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                       <!-- 包含-->
                                    <div class="row">


                                        <div class="col-sm-3">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <div class="cate_color" style="float:right; width:67px;"></div>
                                                    <h5>今日成交量百分比</h5>
                                                    <div class="text-center">
                                                        <div id="sparkline5"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <div class="cate_color" style="float:right; width:67px;"></div>
                                                    <h5>最近7天成交量百分比</h5>

                                                    <div class="text-center">
                                                        <div id="sparkline6"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <div class="cate_color" style="float:right; width:67px;"></div>
                                                    <h5>最近三十天成交量百分比</h5>

                                                    <div class="text-center">
                                                        <div id="sparkline7"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                       <!--结束-->


                        </div>
                </div>
            </div>  
      

          <div class="col-sm-6" style="width:100%">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>主播交易额</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="notifications.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="notifications.html#">选项1</a>
                                </li>
                                <li><a href="notifications.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                       <!-- 包含-->
                                
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="gift_color" style="float:right; width:67px;"></div>
                        <h5>今天礼物成交量</h5>

                        <div class="text-center">
                            <div id="sparkline8"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="gift_color" style="float:right; width:67px;"></div>
                        <h5>今天礼物成交量</h5>

                        <div class="text-center">
                            <div id="sparkline9"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="gift_color" style="float:right; width:67px;"></div>
                        <h5>今天礼物成交量</h5>

                        <div class="text-center">
                            <div id="sparkline10"></div>
                        </div>
                    </div>
                </div>
            </div>
          
       
                       <!--结束-->
                    </div>
                </div>
            </div>  
      
       </div>
    </div>
    <!-- 全局js -->
    <script src="{{ URL::asset('/admin/js/jquery.min.js?v=2.1.4') }}"></script>
    <script src="{{ URL::asset('/admin/js/jquery.min.js?v=2.1.4') }}js/bootstrap.min.js?v=3.3.6"></script>

    <!-- Sparkline -->
    <script src="{{ URL::asset('/admin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Peity -->
    <script src="{{ URL::asset('/admin/js/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- 自定义js -->
    <script src="{{ URL::asset('/admin/js/content.js?v=1.0.0') }}"></script>

    <!-- peity demo data -->


    <script>
        $(document).ready(function () {

            $.ajax({
                type:'get',
                url:'broken_line ',
                success:function(msg) {

                    if (msg) {
                    console.log(msg)
                        $(".sparkline1").sparkline([24, 43, 43, 55, 44, 62, 44, 72], {
                                type: 'line',
                                width: '100%',
                                height: '60',
                                lineColor: '#1ab394',
                                fillColor: "#ffffff"
                        });

                        $(".sparkline2").sparkline([msg.price[0],msg.price[1],msg.price[2],msg.price[3],msg.price[4],msg.price[5],msg.price[6]], {
                            type: 'line',
                            width: '100%',
                            height: '60',
                            lineColor: '#1ab394',
                            fillColor: "#ffffff"
                        });

                        $(".sparkline3").sparkline([msg.cc[0],msg.cc[1],msg.cc[2],msg.cc[3],msg.cc[4],msg.cc[5]], {
                            type: 'line',
                            width: '100%',
                            height: '60',
                            lineColor: '#1ab394',
                            fillColor: "#ffffff"
                        });
                    }
                }
            })

        });

        $(document).ready(function () {

            $.ajax({
                type:'get',
                url:'amount_user',
                success:function(msg) {

                    if (msg) {
                        $("#sparkline1").sparkline([0, 7, 6, 5, 4, 0, 1, 2], {
                            type: 'line',
                            width: '100%',
                            height: '60',
                            lineColor: '#1ab394',
                            fillColor: "#ffffff"
                        });

                        $("#sparkline2").sparkline([msg.msg[0],msg.msg[1],msg.msg[2],msg.msg[3],msg.msg[4],msg.msg[5],msg.msg[6],msg.msg[7]], {
                            type: 'line',
                            width: '100%',
                            height: '60',
                            lineColor: '#1ab394',
                            fillColor: "#ffffff"
                        });

                        $("#sparkline3").sparkline([msg.count[0],msg.count[1],msg.count[2],msg.count[3],msg.count[4],msg.count[5],], {
                            type: 'line',
                            width: '100%',
                            height: '60',
                            lineColor: '#1ab394',
                            fillColor: "#ffffff"
                        });
                    }
                }
            })

        });
        $(document).ready(function () {

            $.ajax({
                type:'get',
                url:'volumes',
                success:function(msg) {

                    if (msg) {

                        $("#sparkline5").sparkline([msg.ca[0],msg.ca[1],msg.ca[2],msg.ca[3],msg.ca[4],msg.ca[5],msg.ca[6]], {
                            type: 'pie',
                            height: '140',
                            sliceColors: msg.color
                        });
                        var str ='';
                        $.each(msg.category,function(k,v){
                            str+='<div style="background-color:'+msg.color[k]+';width:20px;height:10px;float:left"></div><span style="float: right">'+v+'</span><br>'
                        })

                        $('.cate_color').html(str);
                        $("#sparkline6").sparkline([msg.xia[0],msg.xia[1],msg.xia[2],msg.xia[3],msg.xia[4],msg.xia[5],msg.xia[6]], {
                            type: 'pie',
                            height: '140',
                            sliceColors:msg.color
                        });

                        $("#sparkline7").sparkline([msg.Thirty_days[0],msg.Thirty_days[1],msg.Thirty_days[2],msg.Thirty_days[3],msg.Thirty_days[4],msg.Thirty_days[5],msg.Thirty_days[6]], {
                            type: 'pie',
                            height: '140',
                            sliceColors: msg.color
                        });
                    }
                }
            })

        });
        $(document).ready(function () {

            $.ajax({
                type:'get',
                url:'host_classification',
                success:function(msg) {

                    if (msg) {

                        var str ='';
                        $.each(msg.live_gift,function(k,v){
                            str+='<div style="background-color:'+msg.colors[k]+';width:20px;height:10px;float:left"></div><span style="float: right">'+v+'</span><br>'
                        })

                        $('.gift_color').html(str);
                        $("#sparkline8").sparkline([msg.g[1],msg.g[2],msg.g[3],msg.g[4],msg.g[5],msg.g[6],msg.g[7],msg.g[8]], {
                            type: 'pie',
                            height: '140',
                            sliceColors: msg.colors
                        });
                        $("#sparkline9").sparkline([msg.m[1],msg.m[2],msg.m[3],msg.m[4],msg.m[5],msg.m[6],msg.m[7],msg.m[8]], {
                            type: 'pie',
                            height: '140',
                            sliceColors: msg.colors
                        });
                        $("#sparkline10").sparkline([msg.n[1],msg.n[2],msg.n[3],msg.n[4],msg.n[5],msg.n[6],msg.n[7],msg.n[8]], {
                            type: 'pie',
                            height: '140',
                            sliceColors: msg.colors
                        });
                    }
                }
            })

        });

    </script>

    
    

</body>

</html>
