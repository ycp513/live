<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="360-site-verification" content="7926b9ebc257ad49b1be409a0767e2e1" />
    <title>YY LIVE</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <script src="{{URL::asset('/home/js/jquery-1-fe84a54bc0.11.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('/home/css/userindex-cc28fa3489.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('/home/css/headfoot-7232928f5d.mix.css')}}" type="text/css">
    <script src="{{URL::asset('/home/js/headfoot-8e8c36672b.mix.js')}}" charset="utf-8"></script>
    <link href="{{URL::asset('/home/css/bootstrap.min.css?v=3.3.6')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/css/font-awesome.css?v=4.4.0')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/css/style.css?v=4.1.0')}}" rel="stylesheet">
    <link href="{{URL::asset('/home/css/custom.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('/home/css/index-7f196aa861.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ URL::asset('/home/css/headfoot-7232928f5d.mix.css') }}" type="text/css">
</head>
<body>
<div class="w-head" id="wHead" data-stat-eventid="10009039">
    <!-- + topbar-->
    <div class="w-head-main isFix">
        <div class="w-head-main-cnt">
            <h1>
                <a href="/" class="logo" data-stat-act-type="10" data-statistic-module="1">YY LIVE</a>
            </h1>

            <dl id="wHeadKan" class="w-head-kan "> <dt class="w-head-kan-tl"><a href="javascript:;"><i class="icon-kan"></i><span class="t">看直播</span></a></dt>
                <dd class="w-head-menu-cnt w-head-drag"><i class="w-head-drag-tri"></i><i class="w-head-drag-tri2"></i><i class="i w-head-drag-enterstage"></i>
                    <div class="w-head-drag-main">
                        <ul class="w-head-menu-cnt-main-intro">
                        @foreach ($classify as $key => $val)
                             @if( $key%3 == 0 || $key == 0)
                             <li class="w-head-menu-cnt-main-item clear">
                                    <h3 class="tl">
                                            <a href="{{ url('/list/livelist') }}?id={{$key}}" class="tl-link" data-statistic-module="2" data-statistic-moduleid="sing">
                                                    <i class="icon-btn"
                                                       style="background-image: {{URL::asset('home/images/njfinmq1ngmtnmqzys00ytgwlthjzgmtoddknzjjmzhintrm.png')}};"
                                                    >
                                                    </i>
                                                    {{$val}}
                                            </a>
                                    </h3>
                             </li>
                            @elseif( $key %3 == 1 || $key == 1)
                            <li class="w-head-menu-cnt-main-item ">
                                        <h3 class="tl">
                                            <a href="{{ url('/list/livelist') }}?id={{$key}}" class="tl-link" data-statistic-module="2" data-statistic-moduleid="talk">
                                                <i class="icon-btn"
                                                   style="background-image: {{URL::asset('home/images/m2nizdrkodutyti3oc00ndlilwi4ywitzjayywflmju4zgm4.png')}};"
                                                >
                                                </i>
                                                {{$val}}</a>
                                        </h3>
                                    </li>
                             @elseif($key %3 == 2 || $key == 2 )
                            <li class="w-head-menu-cnt-main-item ">
                                        <h3 class="tl">
                                            <a href="{{ url('/list/livelist') }}?id={{$key}}" class="tl-link" data-statistic-module="2" data-statistic-moduleid="red">
                                                <i class="icon-btn"
                                                   style="background-image: {{URL::asset('home/images/zjgzmjk3otqtzta3yi00ymnjlwe1owitymfkztm5ndywzdrl.png')}};"
                                                >
                                                </i>
                                                {{$val}}</a>
                                        </h3>
                                    </li>
                             @endif
                        @endforeach
                           
                        </ul>
                        
                    </div>
                </dd>
            </dl>

            <dl id="wHeadMenu" class="w-head-menu"> <dt class="w-head-menu-tl"><a href="javascript:;" rel="nofollow"><span class="t">全站导航</span><i class="tri"></i><i class="tri2"></i></a></dt>
                <dd class="w-head-menu-cnt w-head-drag">
                    <i class="w-head-drag-tri"></i>
                    <i class="w-head-drag-tri2"></i>
                    <i class="w-head-drag-enterstage"></i>
                </dd>
            </dl>

            <div class="w-head-download"><a href="javascript:;" class="w-head-info-download"><i class="icon"></i>下载</a>
                <div class="w-head-menu-cnt w-head-drag w-head-download-drag"><i class="w-head-drag-tri"></i><i class="w-head-drag-tri2"></i><i class="w-head-drag-enterstage"></i>
                    <div class="w-head-drag-main">
                        <ul class="w-head-download-cnt">
                            <li class="w-head-download-item w-head-download-img">
                                <a  class="app-link" data-statistic-module="7" data-statistic-moduleid="0"><img src="{{URL::asset('home/images/yy2wm-447d81cafa.png')}}" alt="手机YY"><span class="app-txt">手机YY</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="wHeadWatchhistory"></div>
            <script type="text/tmpl" id="wHeadTplWatchHistory">
                <div yy-on="mouseenter: watchhistorymouseenter, mouseleave: watchhistorymouseleave" class="w-head-watchhistory"><a href="javascript:;" class="w-head-info-watchhistory"><i class="icon"></i>观看</a>
                   
                </div>
            </script>

            <div id="wHeadFocusarea"></div>
            <script type="text/tmpl" id="wHeadTplFocus">
                <div yy-on="mouseenter: focusmouseenter, mouseenter: popClose, mouseleave: focusmouseleave" class="w-head-focusarea">
                    <a href="javascript:;" class="w-head-info-focus" data-stat-act-type="4" data-statistic-module="5" data-statistic-moduleid="0"><i class="icon"> </i>订阅<span yy-el="popMsgNum" class="new-message">0</span></a>
                   
                </div>
            </script>

            <form id="wHeadSearchForm" action="{{ url('/index/search') }}" target="_blank" method="post">
                <div class="w-head-search">
                    <div class="w-head-search-ipt">
                        <label for="wHeadSearch" class="icon"><i></i></label>
                        {{ csrf_field() }}
                        <input id="wHeadSearch" placeholder="主播或房间号" name="user" class="ipt" value="" autocomplete="off">
                        <button class="w-search-btn" type="submit" data-stat-act-type="12" data-statistic-module="3"></button>
                    </div>
                    <input type="submit" value="搜索" class="w-head-search-btn" data-stat-act-type="12" data-statistic-module="3">
                </div>
            </form>
            <div class="header-search-tips">
                <ul class="search-items">
                </ul>
            </div>
            <div id="wHeadInfo" class="w-head-info"></div>
            <script type="text/tmpl" id="wHeadTplLogout">
            <div class="w-head-nologin">
                <div class="w-head-info-nologin ">
                    <a href="javascript:;" yy-on="click: login" class="s1" data-stat-act-type="13" data-statistic-module="4" rel="nofollow"><i class="icon-people"></i>登录</a>
                </div>
                <div class="w-head-menu-cnt w-head-drag w-head-focus-drag" style="left:-90px;top:46px;">
                <i class="w-head-drag-tri"></i>
                <i class="w-head-drag-tri2"></i>
                <i class="w-head-drag-enterstage"></i>
                <div class="w-head-drag-main">
                <div class="w-head-blank-cnt current">
                    <div class="login-btn" style="margin-top:20px;"><a href="{{ url('/per/getshow') }}" data-statistic-module="5" data-statistic-moduleid="3" rel="nofollow">个人主页</a> </div>
                    <div class="login-btn"><a href="{{ url('/index/loginout') }}" data-statistic-module="5" data-statistic-moduleid="3" rel="nofollow">退出</a> </div>
                </div>

                </div>
            </div>
            </script>
<script>
        $(function(){
           var a ="<?php if(!empty($user)){ echo $user['username'];} ?>";
            if(a!=''){
                $('.w-head-info-nologin').html('<a href="javascript:;" yy-on="click: login" class="s1" data-stat-act-type="1" data-statistic-module="4" rel="nofollow"><i class="icon-people"></i><span id="login_user">'+a+'</span></a>');
            }
       })
</script>
        </div>
    </div>
    <!-- - topbar-->
<!-- + login-box-->
<div id="thirdparty-frame-box">
    <a href="javascript: void(0);" class="close"></a> <iframe id="thirdpartyLoginFrame" src="" scrolling="no" allowtransparency="true" frameborder="0"></iframe> 
</div>

<div id="loginWrap" class="login-box"><button style="float:right" id="close">X</button>
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
                <td><input type="hidden" name="_token" value="<?php echo csrf_token();  ?>"><input type="text" name="username" id="username" placeholder="&nbsp;&nbsp;您的账户名和登录名" class='input_style' style="margin-top:10px;" >  <span class="yan_sp" id="user"></span>    
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
                <td colspan="2"><input type="checkbox">阅读并同意<a href="" style='text-decoration:none;'> 《直播协议》&nbsp;</a><a href="" style='text-decoration:none;'> 《隐私注册》 </a></td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" value="立即注册" class="reg_btn" id="submit"></td>
            </tr>
        </table>



                </div>

                 </div>
                    <div class="tab-unit">
                        <div class="title active phone-title">手机注册</div>
                        <div id="reg-phone" class="register-tab active"> <iframe id="register-phone" frameborder="0" scrolling="no" allowtransparency="true"></iframe>         
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

</div>


<script>
			var flashUrlPrefix = '//weblbs.yystatic.com/';
        	header({ current: '首页' });
        </script>
<script type="text/javascript">header({nav: false});</script>
<div class="user-head" style="margin-top:20px;">
    <div class="user-head-inner">
        <div class="user-avatar"><img src="{{URL::asset('/home/images/1.jpg')}}" class="avatar" />
            <div class="mask"></div>
            <div class="icon-noble noble-level-0"><span class="noble-num">0</span></div>
        </div>
        <div class="user-info">
            <div class="info-title">
                <h1 class="nick">{{$get_user->username}}</h1>
            </div>
            <div class="info-detail">
                <div class="basic">
                    <span>直播间ID：@if($live_rend != '') {{$live_rend}}  @else 暂无  @endif</span>
                        <span class="icon-line"></span>
                    <span>年度积分：@if("{{$point}}" >= '0') {{$point}} @else 0 @endif </span>
                    <span class="icon-line"></span>
                    <span>vip等级：@if("{{$get_user->user_vip}}" >= '0') {{$get_user->user_vip}} @else 0 @endif </span>
                    </div>
                <div class="tag">
                    </div>
            </div>
        </div>
        <div class="user-status">
            <a href="javascript:void(0);" data-yy="" class="follow-btn"><i class="icon-add"></i>关注</a>
                    </div>
        <div class="user-head-tab">
            <a href="#" class="panel fans-link">粉丝<span>@if("{{$get_user->fans}}" >= '0'){{ $get_user->fans}} @else 0 @endif</span></a>
            <span class="icon-line"></span>
            <a href="#" class="panel follows-link">关注<span>@if("{{$get_user->fans}}" >= '0'){{ $get_user->concem}} @else 0 @endif</span></a>
        </div>
    </div>
</div>
<div class="user-nav">
    <ul>
        <li><a data-toggle="tab" href="#tab-3" aria-expanded="true" class="wdqb active"><i class="icon-news"></i>我的钱包</a></li>
        <li><a data-toggle="tab" href="#tab-2" aria-expanded="true" class="cwzb"><i class="icon-photo"></i>成为主播</a></li>
        <li><a data-toggle="tab" href="#tab-4" aria-expanded="true" class="grxx"><i class="icon-photo"></i>个人信息</a></li>
        <li><a data-toggle="tab" href="#tab-5" aria-expanded="true" class="zy"><i class="icon-photo"></i>修改密码</a></li>
        <li><a data-toggle="tab" href="#tab-6" aria-expanded="true" class="cz"><i class="icon-photo"></i>充值</a></li>
    </ul>
</div>
<!--+ body here-->
<div class="wrapper">
    <div class="tab-content">

        <div id="tab-3" class="tab-pane active">
            <div class="set-info">
                <div class="my-account">
                    <div class="column-1">
                        <div class="total"><strong id="yyMoneyNum">@if("{{$get_user->balance}}" > '0'){{ $get_user->balance}} @else 0 @endif</strong><span>Y币</span>
                        </div>
                        <div class="tips">
                            <i class="zong"></i>可消费余额总值
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="roww" id="yb-row">
                            <div class="total"><strong id="yyMoney">@if("{{$get_user->balance}}" > '0'){{ $get_user->balance}} @else 0 @endif</strong></div>
                            <div class="tips">
                                <i class="yb"></i>Y币
                            </div>

                        </div>
                        <div class="roww" id="quan-row">
                            <div class="total"><strong id="diamondQuan">@if("{{$get_anchor->commision}}" > '0'){{ $get_anchor->commision}} @else 0 @endif</strong></div>
                            <div class="tips">
                                <i class="hong"></i>佣金<a href="javascript:void(0);" class="btn" title="提现">提现</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        @if("{{ $get_anchor->live_rend }}")
            <div id="tab-2" class="tab-pane">
                <div class="panel-body">
                    <div class="form-horizontal"  >
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">封面：</label>
                            <div class="col-sm-8">
                                <img src="{{ URL::asset('/'.$get_anchor->anchor_img)  }}" width="100px;" height="100px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">房间号：</label>
                            <div class="col-sm-8">
                                <span class="sp1">{{ $get_anchor->live_rend }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">直播分类：</label>
                            <div class="col-sm-8">
                                <span class="sp1">{{ $get_anchor->category_id }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">身份证号：</label>
                            <div class="col-sm-8">
                                <span class="sp1">{{ $get_anchor->number }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label ">提款账号：</label>
                            <div class="col-sm-8">
                                <span class="sp1">{{ $get_anchor->back_card }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @else
        <div id="tab-2" class="tab-pane">
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="{{ URL::to('addAnchor') }}" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="col-sm-3 control-label ">身份证号：</label>
                        <div class="col-sm-8">
                            <input type="text"  name="number" class="form-control card">
                            <span id="sp1"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">提款账号：</label>
                        <div class="col-sm-8">
                            <input type="text" name="back_card"  class="form-control banknoInfo">
                            <input type="hidden" name="user_id" value="{{$get_user->user_id}}"/>
                            <span id="sp2"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">直播分类：</label>
                        <div class="col-sm-8">
                            <select class="form-control m-b live_type" name="classify">
                                <option value="">--请选择--</option>
                                @foreach($classify as $k=>$v)
                                <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                            <span id="sp3"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">封面图片：</label>
                        <div class="col-sm-8">
                          <input type="file" tabindex="3" title="支持jpg、jpeg、gif、png格式，文件小于5M" size="3" name="myfile" class="filePrew">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                            <input type="button" value="保存" class="btn btn-sm btn-info submit" style="background-color: #fd0;border-color: #fd0;margin-left: 220px;width: 135px;"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
        <div id="tab-4" class="tab-pane">
            <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户名称：</label>
                            <div class="col-sm-8">
                                <input type="text" id="username" value="{{$get_user->username}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">手机号：</label>
                            <div class="col-sm-8">
                                <input type="text" id="regi_mobile" value="{{$get_user->telphone}}" class="form-control">
                                <input type="hidden" id="ids" value="{{$get_user->user_id}}"/>
                                <span id="sp4"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">验证码：</label>
                            <div class="col-sm-8">
                                <input class="form-control" style="width:440px;float: left;margin-right: 15px;" placeholder="请输入手机验证码" id="validatecode" type="text">
                                <input class="form-control duanxin" style="width:100px; background: #f5f5f5 none repeat scroll 0 0;"  value="获取验证码" type="button">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button class="btn btn-sm btn-info upbtn" style="background-color: #fd0;border-color: #fd0;margin-left: 220px;width: 135px;">保存</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div id="tab-5" class="tab-pane">
            <div class="panel-body">
                <div class="form-horizontal" >
                    <div class="form-group">
                        <label class="col-sm-3 control-label">旧密码：</label>
                        <div class="col-sm-8">
                            <input type="password" name="pwd" value="" class="form-control">
                            <spn id="sp5"></spn>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">新密码：</label>
                        <div class="col-sm-8">
                            <input type="password" name="new_pwd" value="" class="form-control">
                            <input type="hidden" name="user_id" value="{{$get_user->user_id}}"/>
                            <spn id="sp6"></spn>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">再次输入新密码：</label>
                        <div class="col-sm-8">
                            <input type="password" name="new_pwd2" value="" class="form-control">
                            <spn id="sp7"></spn>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                            <button class="btn btn-sm btn-info uppwd" style="background-color: #fd0;border-color: #fd0;margin-left: 220px;width: 135px;">保存</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-6" class="tab-pane">
            <div class="col">
                <div class="col-hd">
                    <div class="tags">
                        <a data-toggle="tab" href="#tab-7" aria-expanded="true" class="shenqu active" >Y币充值</a>
                        <a data-toggle="tab" href="#tab-8" aria-expanded="true" class="duanpai" >vip充值</a>
                    </div>
                </div>
                <div class="col-bd">
                    <ul class="video-list tab-content">
                        <li class="tab-pane active"  id="tab-7">
                            <div class="panel-body">
                                <form class="form-horizontal" method=get" action="recharge"  target="_blank">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">充值账号：</label>
                                        <div class="col-sm-8">
                                            <span class="sp1">{{ $get_user->username }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">充值金额：</label>
                                        <div class="col-sm-8">
                                            <input type="text" maxlength="6" name="money" class="form-control money">
                                            <input type="hidden" name="user_id" value="{{$get_user->user_id}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Y币充值数量：</label>
                                        <div class="col-sm-8 sp1">
                                            <strong class="dwamount"><span id="platDuoWanBNumId"></span></strong>
                                            <span >Y币</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-8">
                                            <button class="btn btn-sm btn-info top-up" style="background-color: #fd0;border-color: #fd0;margin-left: 220px;width: 135px;">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="tab-pane"  id="tab-8">
                            <div class="panel-body" >
                                <form class="form-horizontal" method=get" action="vipRecharge"  target="_blank">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">充值账号：</label>
                                        <div class="col-sm-8">
                                            <span class="sp1">{{ $get_user->username }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">vip等级：</label>
                                        <div class="col-sm-8">
                                            <select name="viprank" id="rank">
                                                <option value="">--请选择--</option>
                                                @foreach($vip as $k=>$v)
                                                    <option value="{{ $k }}">vip{{ $v }}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="user_id" value="{{$get_user->user_id}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">vip充值金额：</label>
                                        <div class="col-sm-8 sp1">
                                            <strong class="dwamount"><span id="vipnumber"></span></strong>
                                            <span >元</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-8">
                                            <button class="btn btn-sm btn-info top-up" style="background-color: #fd0;border-color: #fd0;margin-left: 220px;width: 135px;">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- + module bottom start -->
<div class="w-foot">
            <div class="w-foot-main">
                <div class="w-foot-link">
                    <p><a href="#"  rel="nofollow">关于我们</a><span>|</span><a href="#">网站地图</a><span>|</span><a href="#"  rel="nofollow">联系我们</a><span>|</span>客服频道：<strong><a href="#"  rel="nofollow">110</a></strong><span>|</span><a href="#"  rel="nofollow">YY客服中心</a></p>
                    <p><a href="#"  rel="nofollow">粤ICP备111111号</a><span>|</span><a href="#" rel="nofollow">粤B2-111111</a></p>
                    <p>狗子团队 版权所有 © 2005-2017 YY.com , All rights reserved. 联系电话：13141237390</p>
                </div>
            </div>
</div>

<script src="{{URL::asset('/home/js/bootstrap.min.js?v=3.3.6')}}"></script>
<script src="{{URL::asset('/home/js/jquery.min.js?v=2.1.4')}}"></script>
<script src="{{URL::asset('/home/js/require-a7d9d42513.js')}}"></script>
<script src="{{URL::asset('/home/js/userIndex-dc5663bb2e.js')}}" ></script>
<script type="text/javascript" src="{{URL::asset('/home/js/news.js') }}"></script>

</body>

</html>
