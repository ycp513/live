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
                            <input type="text" placeholder="查找主播" class="input form-control" id="text">
                            <span class="input-group-btn"><button type="button" class="btn btn btn-primary" id="bu"> <i class="fa fa-search"></i> 搜索</button>
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
                                                     <td>直播房间号</td>
                                                        <td> 提现账号</td>
                                                       <td>佣金</td>
                                                        <td>身份证号</td>
                                                        <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                        </td>
                                                        <td> 类型</td>
                                                        <td class="client-status">直播状态
                                                        </td>
                                                     <td>可否提现</td>

                                                    </tr>
                                                <tbody>
                                                @if(isset($res))
                                                @foreach($res as $k => $v)
                                                    <tr>
                                                        <td>
                                                            {{$v->username}}
                                                        </td>
                                                        <td>{{$v->live_rend}}</td>
                                                        <td>{{$v->back_card}}</td>
                                                        <td>{{$v->commision}}</td>
                                                        <td>{{$v->number}}</td>
                                                        <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                        </td>
                                                        <td> {{$v->category_id}}</td>
                                                        <td class="client-status">
                                                            <a href="#" class="status" status="{{$v->force_status}}" user-id="{{$v->user_id}}">
                                                                <span class="label label-primary">{{$v->force}}</span>
                                                            </a>
                                                        </td>
                                                        <td class="client-status">
                                                            <a href="#" class="commision_status" commision-status="{{$v->commision_status}}" user-id="{{$v->user_id}}">
                                                            <span class="label label-primary">{{$v->commisions}}</span>
                                                                </a>
                                                        </td>

                                                    </tr>
                                               @endforeach
                                                @endif
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
                                                    <td>直播房间号</td>
                                                    <td> 提现账号</td>
                                                    <td>佣金</td>
                                                    <td>身份证号</td>
                                                    <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                    </td>
                                                    <td> 类型</td>
                                                    <td class="client-status">直播状态
                                                    </td>
                                                    <td>可否提现</td>

                                                </tr>
                                                <tbody>
                                                @if(isset($res))
                                                @foreach($arr as $k => $v)
                                                    <tr>
                                                        <td>
                                                            {{$v->username}}
                                                        </td>
                                                        <td>{{$v->live_rend}}</td>
                                                        <td>{{$v->back_card}}</td>
                                                        <td>{{$v->commision}}</td>
                                                        <td>{{$v->number}}</td>
                                                        <td class="contact-type"><i class="fa fa-envelope"> </i>
                                                        </td>
                                                        <td> {{$v->category_id}}</td>
                                                        <td class="client-status"><a href="#" class="status" status="{{$v->force_status}}" user-id="{{$v->user_id}}"><span class="label label-primary">{{$v->force}}</span></a>
                                                        </td>
                                                        <td class="client-status">
                                                            <a href="#" class="commision_status" commision-status="{{$v->commision_status}}" user-id="{{$v->user_id}}">
                                                            <span class="label label-primary">{{$v->commisions}}</span>
                                                                </a>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                                @endif
                                                 
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
  <script src="{{URL::asset('/admin/js/bootstrap.min.js?v=3.3.6')}}"></script>

    <!-- 自定义js -->
    <script src="{{URL::asset('/admin/js/jquery-1.9.1.min.js')}}"></script>
    <script>
  $(document).on('click','.status',function(){
      var that=$(this);
      //var force_status = that.attr('status');
      var user_id = that.attr('user-id');
      if(confirm("确认要修改吗？")){
          $.ajax({
              type:'get',
              url:'update_status',
              data:{user_id:user_id},
              success:function(msg){
                  if(msg==1){
                      that.find('span').html('正常')
                      window.location.reload()
                  }else{
                      that.find('span').html('封杀')
                      window.location.reload()
                  }
              }
          })
      }else{
          return false;
      }
  })

  $(document).on('click','.commision_status',function(){
      var that=$(this);
      var user_id = that.attr('user-id');
      if(confirm("确认要修改吗？")){
          $.ajax({
              type:'get',
              url:'update_commision',
              data:{user_id:user_id},
              success:function(msg){
                  if(msg==1){
                      that.find('span').html('是')
                      //alert('修改成功');
                      //window.location.reload()
                  }else{
                      that.find('span').html('否')
                      //window.location.reload()
                  }
              }
          })
      }else{
          return false;
      }
  })

   $(document).on('click','#bu',function(){
       var text = $('#text').val();
       $.ajax({
           type:'get',
           url:"search_anchor",
           data:{text:text},
           //dagaType:'json',
           success:function(msg){
               if(msg){
                   var str='<table class="table table-striped table-hover">'
                   str+='<tr>'
                   str+='<td>主播名称</td>'
                   str+='<td>直播房间号</td>'
                   str+='<td> 提现账号</td>'
                   str+='<td>佣金</td>'
                   str+='<td>身份证号</td>'
                   str+='<td class="contact-type"><i class="fa fa-envelope"> </i></td>'
                   str+='<td> 类型</td>'
                   str+='<td class="client-status">直播状态 </td>'
                   str+='<td>可否提现</td>'
                   str+='</tr>'
                   str+='<tbody>'
                   $.each(msg,function(i,v){
                       str+='<tr>'
                       str+='<td>'+ v.username+'</td>'
                       str+='<td>'+v.live_rend+'</td>'
                       str+='<td>'+v.back_card+'</td>'
                       str+='<td>'+v.commision+'</td>'
                       str+='<td>'+v.number+'</td>'
                       str+='<td class="contact-type"><i class="fa fa-envelope"> </i></td>'
                       str+='<td>'+v.category_id+'</td>'
                       str+='<td class="client-status"><a href="#" class="status"  user-id='+v.user_id+'><span class="label label-primary">'+v.force+'</span></a></td>'
                       str+='<td class="client-status"><a href="#" class="commision_status" user-id='+v.user_id+'><span class="label label-primary">'+v.commisions+'</span></a></td>'
                       str+='</tr>'
                   })
                   str+='</tbody>'
                   str+='</table>'
                   $('.clients-list').html(str)
               }
           }
       })
   })
    </script>

    
    

</body>

</html>
