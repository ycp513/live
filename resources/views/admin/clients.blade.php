<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 客户管理</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="{{ URL::asset('/admin/css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">

    <link href="{{ URL::asset('/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/admin/css/style.css?v=4.1.0') }}" rel="stylesheet">
    <!-- Data Tables -->
    <link href="{{ URL::asset('/admin/css/plugins/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet">


</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-8" style="width:100%">
                <div class="ibox">
                    <div class="ibox-content" >
                 
                        <h2>直播用户状态管理</h2>
                      
                        <div class="input-group">
                            <input type="text" placeholder="查找客户" class="input form-control">
                            <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> 搜索</button>
                                </span>
                        </div>
                        <div class="clients-list">
                            <ul class="nav nav-tabs">
                             
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> 正常</a>
                                </li>
                                <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> 封杀</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                 <tr>
                                                       
                                                        <td>主播名称
                                                        </td>
                                                        <td> 提现账号</td>
                                                        <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                        </td>
                                                        <td> 类型</td>
                                                        <td class="client-status">直播状态
                                                        </td>
                                                        <td>操作</td>
                                                    </tr>
                                                <tbody>
                                                    <tr>
                                                       
                                                        <td>袁岳
                                                        </td>
                                                        <td> 546465465465465</td>
                                                        <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                        </td>
                                                        <td> 娱乐</td>
                                                        <td class="client-status"><span class="label label-primary">正常</span>
                                                        </td>
                                                         <td class="client-status"><a href="javascript:void(0)"><span class="label label-primary">修改状态</span></a>
                                                        </td>
                                                    </tr>
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                           <tr>
                                                               
                                                                <td>主播名称
                                                                </td>
                                                                <td> 提现账号</td>
                                                                <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                                </td>
                                                                <td> 类型</td>
                                                                <td class="client-status">直播状态
                                                                </td>
                                                                <td>操作</td>
                                                            </tr>
                                                <tbody>
                                                   <tr>
                                                       
                                                        <td>超配
                                                        </td>
                                                        <td> 546465465465465</td>
                                                        <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                        </td>
                                                        <td> 娱乐</td>
                                                        <td class="client-status"><span class="label label-primary">封杀</span>
                                                        </td>
                                                         <td class="client-status"><a href="javascript:void(0)"><span class="label label-primary">修改状态</span></a>
                                                        </td>
                                                    </tr>
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          

 



    <script src="{{URL::asset('/admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{URL::asset('/admin/js/bootstrap.min.js?v=3.3.6')}}"></script>
    
   

    <!-- 自定义js -->
    <script src="{{URL::asset('/admin/js/content.js?v=1.0.0')}}"></script>
    <script>
        // $(function () {
        //     $('.full-height-scroll').slimScroll({
        //         height: '100%'
        //     });
        // });
    </script>

    
    

</body>

</html>
