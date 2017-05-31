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
                                                        <i class="fa fa-circle text-navy"></i> 1000
                                                    </h2>
                                            <small>更新时间：12天以前</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content ">
                                            <h5 class="m-b-md">在线人数</h5>
                                            <h2 class="text-navy">
                                                       <i class="fa fa-circle text-navy"></i> 1000
                                                    </h2>
                                            <small>更新时间：12天以前</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5 class="m-b-md">直播房间数</h5>
                                            <h2 class="text-danger">
                                                        <i class="fa fa-circle text-navy"></i> 1000
                                                    </h2>
                                            <small>更新时间：12天以前</small>
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
                                            <h5>本日访问量</h5>
                                            <h2>198 009</h2>
                                            <div id="sparkline1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>本周访问量</h5>
                                            <h2>65 000</h2>
                                            <div id="sparkline2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>本月访问量</h5>
                                            <h2>10000 900</h2>
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
                                            <h2>198 009</h2>
                                            <div class="sparkline1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>本周交易额</h5>
                                            <h2>65 000</h2>
                                            <div class="sparkline2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>本月交易额</h5>
                                            <h2>10000 900</h2>
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
                                            <h5>娱乐主播</h5>
                                            <table class="table table-stripped small m-t-md">
                                                <tbody>
                                                    <tr>
                                                        <td class="no-borders">
                                                            <i class="fa fa-circle text-navy">今日</i>
                                                        </td>
                                                        <td class="no-borders">
                                                            88888￥
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="fa fa-circle text-navy">本周</i>
                                                        </td>
                                                        <td>
                                                            88888￥
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="fa fa-circle text-navy">本月</i>
                                                        </td>
                                                        <td>
                                                             88888￥
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="fa fa-circle text-navy">今年</i>
                                                        </td>
                                                        <td>
                                                             88888￥
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                        <h5>今日礼物成交量</h5>
                        <h1 class="no-margins">886,200</h1>
                        <div class="stat-percent font-bold text-navy">88888￥ </div>
                        <small>今日总收入</small>
                    </div>
                </div>
            </div>
             <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>今日礼物成交量</h5>
                        <h1 class="no-margins">886,200</h1>
                        <div class="stat-percent font-bold text-navy">88888￥ </div>
                        <small>今日总收入</small>
                    </div>
                </div>
            </div>
          
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>本周礼物成交量</h5>
                        <h1 class="no-margins">886,200</h1>
                        <div class="stat-percent font-bold text-navy">88888￥ </div>
                        <small>本周总收入</small>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-3">
                <div class="ibox">
                    <div class="ibox-content">
                        <h5>本月礼物成交量</h5>
                        <h1 class="no-margins">886,200</h1>
                        <div class="stat-percent font-bold text-navy">88888￥ </div>
                        <small>本月总收入</small>
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

           
            $(".sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                type: 'line',
                width: '100%',
                height: '60',
                lineColor: '#1ab394',
                fillColor: "#ffffff"
            });

            $(".sparkline2").sparkline([24, 43, 43, 55, 44, 62, 44, 72], {
                type: 'line',
                width: '100%',
                height: '60',
                lineColor: '#1ab394',
                fillColor: "#ffffff"
            });

            $(".sparkline3").sparkline([74, 43, 23, 55, 54, 32, 24, 99], {
                type: 'line',
                width: '100%',
                height: '60',
                lineColor: '#1ab394',
                fillColor: "#ffffff"
            });

            $(".sparkline4").sparkline([24, 43, 33, 55, 64, 72, 44, 22], {
                type: 'line',
                width: '100%',
                height: '60',
                lineColor: '#ed5565',
                fillColor: "#ffffff"
            });
            $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                type: 'line',
                width: '100%',
                height: '60',
                lineColor: '#1ab394',
                fillColor: "#ffffff"
            });

            $("#sparkline2").sparkline([24, 43, 43, 55, 44, 62, 44, 72], {
                type: 'line',
                width: '100%',
                height: '60',
                lineColor: '#1ab394',
                fillColor: "#ffffff"
            });

            $("#sparkline3").sparkline([74, 43, 23, 55, 54, 32, 24, 99], {
                type: 'line',
                width: '100%',
                height: '60',
                lineColor: '#1ab394',
                fillColor: "#ffffff"
            });

            $("#sparkline4").sparkline([24, 43, 33, 55, 64, 72, 44, 22], {
                type: 'line',
                width: '100%',
                height: '60',
                lineColor: '#ed5565',
                fillColor: "#ffffff"
            });

            $("#sparkline5").sparkline([1, 4], {
                type: 'pie',
                height: '140',
                sliceColors: ['#1ab394', '#F5F5F5']
            });

            $("#sparkline6").sparkline([5, 3], {
                type: 'pie',
                height: '140',
                sliceColors: ['#1ab394', '#F5F5F5']
            });

            $("#sparkline7").sparkline([2, 2], {
                type: 'pie',
                height: '140',
                sliceColors: ['#ed5565', '#F5F5F5']
            });

            $("#sparkline8").sparkline([2, 3], {
                type: 'pie',
                height: '140',
                sliceColors: ['#ed5565', '#F5F5F5']
            });


        });
    </script>

    
    

</body>

</html>
