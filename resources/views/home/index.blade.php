<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
    <link href="{{ URL::asset('home/css/pgwslider.min.css')}}" rel="stylesheet">
    <style type="text/css">
        .m{ width: 1000px; height: 300px; margin-left: auto; margin-right: auto; margin-top: 2%; }
    </style>
    <script src="{{ URL::asset('home/js/turn.js')}}"></script>
    <script src="{{ URL::asset('home/js/pgwslider.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).ready(function() {
                jQuery.noConflict();
                $('.pgwSlider').pgwSlider();
            });
        });
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="baidu-site-verification" content="JOgjfxUTMx" />
<meta name="applicable-device" content="pc">
<script src="{{ URL::asset('/home/js/jquery-1-fe84a54bc0.11.1.min.js') }}"></script>
<title>YY LIVE-全民娱乐视频直播平台</title>
    <meta property="wb:webmaster" content="c50daaac5f17a835" />
    <meta name="description" content="YY LIVE是全民娱乐视频直播平台,注册用户超10亿网站,提供在线高清流畅的直播间与美女直播视频秀、其中包含音乐、舞蹈、脱口秀等热门秀场直播以及CBA体育直播,lol、dota2、dnf等网络游戏直播。">
    <meta name="keywords" content="直播,视频直播,直播网站,lol直播,CBA直播,直播平台,在线直播,美女直播,现场直播,体育直播,直播视频秀,直播间,网络直播,游戏直播">
    <meta name="applicable-device" content="pc">
<link rel="stylesheet" href="{{ URL::asset('/home/css/index-7f196aa861.css') }}" type="text/css">

</head>

<body>
<link rel="stylesheet" href="{{ URL::asset('/home/css/headfoot-7232928f5d.mix.css') }}" type="text/css">
<script src="{{URL::asset('/home/js/headfoot-8e8c36672b.mix.js')}}" charset="utf-8"></script>
<!-- + head-->
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
                        @foreach ($category as $key => $val)
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
                    <a href="javascript:;" class="s1 login_block" rel="nofollow"><i class="icon-people"></i>登录</a>
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
<!-- + nav-->
 <div class="w-head-nav" >
        <div class="w-head-nav-main">
            <div class="w-head-nav-main-l">
                <ul id="wHeadNav">
                    <li data-biz="index" data-stat-bak1="index" data-stat-act-type="1" >
                            <a href="{{ url('/index/index') }}" class="t"><span>首页</span><i class="line-b"></i>
                                </a>
                            </li>
                    @foreach ($category as $key => $val)
                    <li data-biz="talk" data-stat-bak1="talk" data-stat-act-type="1" >
                        <a href="{{ url('/list/livelist') }}?id={{$key}}" class="t"><span>{{$val}}</span><i class="line-b"></i>
                        </a>
                    </li>
                    @endforeach
                    </ul>
            </div>
        </div>
    </div>
    <!-- - nav-->
</div>
<!-- + login-box-->
<div id="thirdparty-frame-box">
    <a href="javascript: void(0);" class="close"></a> <iframe id="thirdpartyLoginFrame" src="" scrolling="no" allowtransparency="true" frameborder="0"></iframe> 
</div>

<div id="loginWrap" class="login-box" style="height:480px;"><button style=" float: right;height: 20px;margin-right: 5px; margin-top: 5px; width: 20px;" id="close">X</button>
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
<!-- - login-box-->

</div>
<script>
	header({ current: '首页' });
</script> 
 	
<div class="wrapper" data-stat-eventid="10008897" data-stat-bak1="index">
 <div id="banner-bg"  data-bgcolor="">
	<div id="banner-fg" class="banner-wrap">
		

		<div class="bg-link" data-stat-bak2="1001" data-stat-bak3="17" data-stat-name="首页静默直播模块">
                 
                </div>
        <div class="banner-inner" data-tmpl-type="1001_1100">
            <div class="m">
                <ul class="pgwSlider">
                @foreach ($carousel as $val)
                    <li><a href='{{url("$val[url]")}}' target="_blank"><img src="{{URL::asset('/home')}}{{$val['img_url']}}" alt="{{$val['name']}}" ></a></li>
                @endforeach
                </ul>
            </div>
		</div> 
	</div>
</div>
@if($detailed['success'] == 0)
    <div class="content-wrap">
    <h1 align="center">{{$detailed['mess']}}或者加入我们（请进入个人中心）</h1>
    </div>
@else
<div class="content-wrap">
    
    <div class="column live-tabBox" data-stat-bak2="1102" data-stat-bak3="25" data-stat-name="音乐">
<div class="column-hd">
	<h3 class="column-title">
			<a href="{{ url('/list/livelist/') }}?id=0" target="_blank" data-stat-parm1="1" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="5"><i class="icon-208"></i>音乐</a>
			</h3>
	<div class="hd-tags">
			</div>
	<a href="{{ url('/list/livelist/') }}?id=0" target="_blank" class="more" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="14">更多</a>
	</div>
<div class="column-bd">
    <ul class="video-list ">
    @if(empty($detailed[0]))
    <li class="video-item">
    <h1 align="center">还没有主播加入，敬请期待！或者加入我们（请进入个人中心）</h1>
    </li>
    @else
    @foreach($detailed[0] as $key => $val )
    @if ($key <= 10)
        <li class="video-item">
            <a class="video-box" href="{{ url('liveroom/live') }}?id={{$val -> user_id}}" target="_blank" title="{{$val -> username}}" data-stat-act-type="3">
                <div class="video-pic">
                    <div class="video-pic-inner"><div class="pic-default"><img src="{{URL::asset('home/images/default_load-7889f80ae2.png')}}" alt="{{$val -> username}}"></div>
                    <div class="pic-real"><img class="lazy" data-original="//emyfs.bs2cdn.yy.com/YzViOGJkYjMtNjUzMy00OWE4LWIxNjEtYTQ1NGNkOTJiNWY1.jpg?imageview/4/0/w/363/h/330/blur/1" alt="{{$val -> username}}" /></div></div>
                    <div class="mask"></div>
                    <i class="icon-play"></i>
                </div>
            </a>
            <div class="video-info">
                <p class="video-title"><a href="{{ url('liveroom/live') }}?id={{$val -> user_id}}" target="_blank" title="{{$val -> username}}" data-stat-act-type="3">{{$val -> username}}</a></p>
                <div class="audience-count">
                    <i class="icon-people"></i>
                    @if (strlen($val -> fans) <= 4 )
                    {{$val->fans}}
                    @elseif (strlen($val -> fans) > 4)
                    {{substr($val -> fans ,0,-4)}} 万
                    @endif
                </div>
            </div>
        </li>
    @endif
    @endforeach
    @endif
    </ul>
</div>
</div>
<div class="column live-tabBox" data-stat-bak2="1102" data-stat-bak3="26" data-stat-name="舞蹈">
<div class="column-hd">
    <h3 class="column-title">
        <a href="{{url('/list/livelist')}}?id=1" target="_blank" data-stat-parm1="1" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="5"><i class="icon-202"></i>舞蹈</a>
    </h3>
    <div class="hd-tags"></div>
    <a href="{{url('/list/livelist')}}?id=1" target="_blank" class="more" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="14">更多</a>
    </div>
<div class="column-bd">
    <ul class="video-list ">
        @if(empty($detailed[1]))
        <li class="video-item">
        <h1 align="center">还没有主播加入，敬请期待！或者加入我们（请进入个人中心）</h1>
        </li>
        @else
        @foreach($detailed[1] as $key => $val )
        @if ($key <= 10)
        <li class="video-item" data-sid="22490906" data-ssid="22490906" data-uid="1616091973" data-biz="dance" data-tpl="16777217" data-type="4"  data-stat-parm1="1" data-stat-parm2="4" data-stat-parm3="22490906" data-stat-sid="22490906" data-stat-hostid="1616091973">
            <a class="video-box" href="{{url('liveroom/live')}}?id={{ $val -> user_id }}" target="_blank" title="{{$val -> username }}" data-stat-act-type="3">
                <div class="video-pic">
                    <div class="video-pic-inner"><div class="pic-default"><img src="{{URL::asset('home/images/default_load-7889f80ae2.png')}}" alt="{{$val -> username }}"></div>
                    <div class="pic-real"><img class="lazy" data-original="//emyfs.bs2cdn.yy.com/ZDM2NjFiNTUtYjhlMi00ZWY5LTk1YWEtMzJjNTRmNzMyYTNk.jpg?imageview/4/0/w/363/h/330/blur/1" alt="{{$val->username}}" /></div></div>
                    <div class="mask"></div>
                    <i class="icon-play"></i>
                </div>
            </a>
            <div class="video-info">
                <p class="video-title"><a href="/22490906/22490906?tempId=16777217" target="_blank" title="{{$val -> username }}" data-stat-act-type="3">{{$val -> username }}</a></p>
                <div class="audience-count">
                    <i class="icon-people"></i>
                    @if (strlen($val -> fans) <= 4 )
                    {{$val->fans}}
                    @elseif (strlen($val -> fans) > 4)
                    {{substr($val -> fans ,0,-4)}} 万
                    @endif
                </div>
            </div>
        </li>
        @endif
        @endforeach
        @endif
    </ul>
</div>
<div class="column live-tabBox" data-stat-bak2="1102" data-stat-bak3="33" data-stat-name="脱口秀">
<div class="column-hd">
    <h3 class="column-title">
            <a href="{{url('/list/livelist')}}?id=2" target="_blank" data-stat-parm1="1" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="5"><i class="icon-203"></i>脱口秀</a>
            </h3>
    <div class="hd-tags">
    </div>
    <a href="{{url('/list/livelist')}}?id=2" target="_blank" class="more" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="14">更多</a>
</div>
<div class="column-bd">
    <ul class="video-list ">
    @if(empty($detailed[2]))
    <li class="video-item">
    <h1 align="center">还没有主播加入，敬请期待！或者加入我们（请进入个人中心）</h1>
    </li>
    @else
    @foreach($detailed[2] as $key => $val )
    @if ($key <= 10)
        <li class="video-item">
            <a class="video-box" href="{{url('liveroom/live')}}?id={{$val->user_id}}" target="_blank" title="{{$val -> username}}" data-stat-act-type="3">
                <div class="video-pic">
                    <div class="video-pic-inner"><div class="pic-default"><img src="{{URL::asset('home/images/default_load-7889f80ae2.png')}}" alt="{{$val -> username}}"></div>
                    <div class="pic-real"><img class="lazy" data-original="" alt="{{$val -> username}}" /></div></div>
                    <div class="mask"></div>
                    <i class="icon-play"></i>
                </div>
            </a>
            <div class="video-info">
                <p class="video-title"><a href="/93479716/93479716?tempId=16777217" target="_blank" title="{{$val -> username}}" data-stat-act-type="3">{{$val -> username}}</a></p>
                <div class="audience-count">
                    <i class="icon-people"></i>
                    @if (strlen($val -> fans) <= 4 )
                    {{$val->fans}}
                    @elseif (strlen($val -> fans) > 4)
                    {{substr($val -> fans ,0,-4)}} 万
                    @endif
                </div>
            </div>
        </li>
    @endif
    @endforeach
    @endif
    </ul>
</div>
</div>
<div class="column live-tabBox" data-stat-bak2="1102" data-stat-bak3="27" data-stat-name="户外">
<div class="column-hd">
	<h3 class="column-title">
			<a href="{{url('list/livelist')}}?id=3" target="_blank" data-stat-parm1="1" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="5"><i class="icon-212"></i>户外</a>
			</h3>
	<div class="hd-tags">
	</div>
	<a href="{{url('list/livelist')}}?id=3" target="_blank" class="more" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="14">更多</a>
	</div>
<div class="column-bd">
	<ul class="video-list ">
    @if(empty($detailed[3]))
    <li class="video-item">
    <h1 align="center">还没有主播加入，敬请期待！或者加入我们（请进入个人中心）</h1>
    </li>
    @else
    @foreach($detailed[3] as $key => $val )
    @if ($key <= 10)
			<a class="video-box" href="{{url('liveroom/live')}}?id={{$val->user_id}}" target="_blank" title="{{$val->username}}" data-stat-act-type="3">
				<div class="video-pic">
					<div class="video-pic-inner"><div class="pic-default"><img src="{{URL::asset('home/images/default_load-7889f80ae2.png')}}" alt="{{$val->username}}"></div>
					<div class="pic-real"><img class="lazy" data-original="//emyfs.bs2cdn.yy.com/MTFmYzdkMDUtYTQ5MS00YjZkLThiZjAtMjA5ZWVkYTZjMjcz.jpg?imageview/4/0/w/363/h/330/blur/1" alt="{{$val->username}}" /></div></div>
					<div class="video-tag tag-color-0">
						</div>
					<div class="mask"></div>
					<i class="icon-play"></i>
					
				</div>
			</a>
			<div class="video-info">
				<p class="video-title"><a href="{{url('liveroom/live')}}?id={{$val->user_id}}" target="_blank" title="{{$val->username}}" data-stat-act-type="3">{{$val->username}}</a></p>
				<div class="audience-count">
					<i class="icon-people"></i>
                    @if (strlen($val -> fans) <= 4 )
                    {{$val->fans}}
                    @elseif (strlen($val -> fans) > 4)
                    {{substr($val -> fans ,0,-4)}} 万
                    @endif
                </div>
			</div>
		</li>
        @endif
        @endforeach   
        @endif
	</ul>
</div>
</div>
</div>
<div class="column live-tabBox" data-stat-bak2="1005" data-stat-bak3="57" data-stat-name="大家都在看">
	<div class="column-hd">
		<h3 class="column-title">
				<span><i class="icon-207"></i>大家都在看</span>
				</h3>
			</div>
	<div class="column-bd">
		<ul class="video-list ">
        @foreach($anchors as $key => $val)
			<li class="video-item">
				<a class="video-box" href="{{url('liveroom/live')}}?id={{$val->user_id}}" title="{{$val->username}}" target="_blank" data-stat-act-type="3">
					<div class="video-pic">
						<div class="video-pic-inner"><div class="pic-default"><img src="{{URL::asset('home/images/default_load-7889f80ae2.png')}}" alt="{{$val->username}}"></div>
						<div class="pic-real"><img class="lazy" data-original="" alt="{{$val->username}}" /></div></div>
						<div class="video-type">{{$val->username}}</div>
							<div class="mask"></div>
						<i class="icon-play"></i>
					</div>
				</a>
				<div class="video-info">
					<p class="video-title"><a target="_blank" href="{{url('liveroom/live')}}?id={{$val->user_id}}" href="" title="{{$val->username}}"  data-stat-act-type="3">{{$val->username}}</a></p>
					<div class="audience-count"><i class="icon-people"></i>22056</div>
				</div>
			</li>
        @endforeach        
		</ul>
	</div>
</div>
@endif
</div>
</div>

<script type="text/javascript" src="{{URL::asset('/home/js/news.js') }}"></script>
<!-- - sidetool-->
<div class="w-foot">
            <div class="w-foot-main">
                <div class="w-foot-link">
                    <p><a href="#"  rel="nofollow">关于我们</a><span>|</span><a href="#">网站地图</a><span>|</span><a href="#"  rel="nofollow">联系我们</a><span>|</span>客服频道：<strong><a href="#"  rel="nofollow">110</a></strong><span>|</span><a href="#"  rel="nofollow">YY客服中心</a></p>
                    <p><a href="#"  rel="nofollow">粤ICP备111111号</a><span>|</span><a href="#" rel="nofollow">粤B2-111111</a></p>
                    <p>狗子团队 版权所有 © 2005-2017 YY.com , All rights reserved. 联系电话：13141237390</p>
                </div>
            </div>
</div>

</html>
