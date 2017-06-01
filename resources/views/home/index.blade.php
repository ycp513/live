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
<script>
var stat = {
    start: new Date(),
    times: []
};
</script>
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
<script>
(function(){
    if(typeof require == 'undefined'){
        window.require = {
            urlArgs: '20170518154705',
            waitSeconds: 0
        };
    }
})();
    
</script>
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
                             @if( $key%3 == 1 || $key ==1)
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
                            @elseif( $key %3 == 2 || $key ==2)
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
                             @elseif($key %3 == 0 )
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
                            <!--<li class="w-head-menu-cnt-main-item clear">
                                        <h3 class="tl">
                                            <a href="/music/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="sing">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/njfinmq1ngmtnmqzys00ytgwlthjzgmtoddknzjjmzhintrm.png');"
                                                >
                                                </i>
                                                歌舞</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                            <a href="/music/dance" target="_blank" data-statistic-module="2" data-statistic-moduleid="sing_dance">
                                                                舞蹈</a>
                                                        </li>
                                                    <li>
                                                            <a href="/music/pop" target="_blank" data-statistic-module="2" data-statistic-moduleid="sing_pop">
                                                                流行</a>
                                                        </li>
                                                    </ul>
                                        </div>
                                    </li>
                            <li class="w-head-menu-cnt-main-item ">
                                        <h3 class="tl">
                                            <a href="/show/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="talk">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/m2nizdrkodutyti3oc00ndlilwi4ywitzjayywflmju4zgm4.png');"
                                                >
                                                </i>
                                                脱口秀</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                        <a href="/show/" target="_blank" data-statistic-module="2" data-statistic-moduleid="talk">
                                                            全部
                                                        </a>
                                                    </li>
                                                </ul>
                                        </div>
                                    </li>
                            <li class="w-head-menu-cnt-main-item ">
                                        <h3 class="tl">
                                            <a href="/travel/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="red">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/zjgzmjk3otqtzta3yi00ymnjlwe1owitymfkztm5ndywzdrl.png');"
                                                >
                                                </i>
                                                户外</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                            <a href="/travel/dashan" target="_blank" data-statistic-module="2" data-statistic-moduleid="red_dashan">
                                                                搭讪</a>
                                                        </li>
                                                    <li>
                                                            <a href="/travel/daye" target="_blank" data-statistic-module="2" data-statistic-moduleid="red_daye">
                                                                打野</a>
                                                        </li>
                                                    <li>
                                                            <a href="/travel/lvyou" target="_blank" data-statistic-module="2" data-statistic-moduleid="red_lvyou">
                                                                旅游</a>
                                                        </li>
                                                    <li>
                                                            <a href="/travel/lieqi" target="_blank" data-statistic-module="2" data-statistic-moduleid="red_lieqi">
                                                                猎奇</a>
                                                        </li>
                                                    </ul>
                                        </div>
                                    </li>
                            <li class="w-head-menu-cnt-main-item clear">
                                        <h3 class="tl">
                                            <a href="/mc/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="mc">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/zdfkyzgxmwutzdbinc00ymzkltk5ztutztizyje5nzaynza2.png');"
                                                >
                                                </i>
                                                喊麦</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                        <a href="/mc/" target="_blank" data-statistic-module="2" data-statistic-moduleid="mc">
                                                            全部
                                                        </a>
                                                    </li>
                                                </ul>
                                        </div>
                                    </li>
                            <li class="w-head-menu-cnt-main-item ">
                                        <h3 class="tl">
                                            <a href="/game/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="game">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/y2njntq3zwutzmuzys00zgqzlthlowitmmeyotq0yjy4mju5.png');"
                                                >
                                                </i>
                                                手游</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                            <a href="/game/glory" target="_blank" data-statistic-module="2" data-statistic-moduleid="game_glory">
                                                                王者荣耀</a>
                                                        </li>
                                                    <li>
                                                            <a href="/game/ball" target="_blank" data-statistic-module="2" data-statistic-moduleid="game_ball">
                                                                球球大作战</a>
                                                        </li>
                                                    <li>
                                                            <a href="/game/lsr" target="_blank" data-statistic-module="2" data-statistic-moduleid="game_lsr">
                                                                狼人杀</a>
                                                        </li>
                                                    </ul>
                                        </div>
                                    </li>
                            <li class="w-head-menu-cnt-main-item ">
                                        <h3 class="tl">
                                            <a href="/sport/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="sport">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/mthlnty3otmtytniyy00ytlllwiznwqtmtlkntuzyzhkndbh.png');"
                                                >
                                                </i>
                                                体育</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                            <a href="/cba" target="_blank" data-statistic-module="2" data-statistic-moduleid="sport_CBA">
                                                                CBA</a>
                                                        </li>
                                                    <li>
                                                            <a href="/c/klj/index.htm" target="_blank" data-statistic-module="2" data-statistic-moduleid="sport_KLF">
                                                                昆仑决</a>
                                                        </li>
                                                    <li>
                                                            <a href="/c/rlgd/index.htm" target="_blank" data-statistic-module="2" data-statistic-moduleid="sport_RoadFc">
                                                                RoadFc</a>
                                                        </li>
                                                    </ul>
                                        </div>
                                    </li>
                            <li class="w-head-menu-cnt-main-item clear">
                                        <h3 class="tl">
                                            <a href="/acg/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="car">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/mge3ntdlztatotbjoc00zmy1ltg5mtitowflntuxzgmwnme1.png');"
                                                >
                                                </i>
                                                二次元</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                        <a href="/acg/" target="_blank" data-statistic-module="2" data-statistic-moduleid="car">
                                                            全部
                                                        </a>
                                                    </li>
                                                </ul>
                                        </div>
                                    </li>
                            <li class="w-head-menu-cnt-main-item ">
                                        <h3 class="tl">
                                            <a href="/cgame/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="cgame">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/zdfkyzgxmwutzdbinc00ymzkltk5ztutztizyje5nzaynza2.png');"
                                                >
                                                </i>
                                                端游</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                            <a href="/cgame/lol" target="_blank" data-statistic-module="2" data-statistic-moduleid="cgame_lol">
                                                                LOL</a>
                                                        </li>
                                                    <li>
                                                            <a href="/cgame/dnf" target="_blank" data-statistic-module="2" data-statistic-moduleid="cgame_dnf">
                                                                DNF</a>
                                                        </li>
                                                    <li>
                                                            <a href="/cgame/cf" target="_blank" data-statistic-module="2" data-statistic-moduleid="cgame_cf">
                                                                CF</a>
                                                        </li>
                                                    <li>
                                                            <a href="/cgame/dota" target="_blank" data-statistic-module="2" data-statistic-moduleid="cgame_dota">
                                                                DOTA</a>
                                                        </li>
                                                    <li>
                                                            <a href="/cgame/hearthstone" target="_blank" data-statistic-module="2" data-statistic-moduleid="cgame_hearthstone">
                                                                炉石</a>
                                                        </li>
                                                    <li>
                                                            <a href="/cgame/minecraft" target="_blank" data-statistic-module="2" data-statistic-moduleid="cgame_minecraft">
                                                                我的世界</a>
                                                        </li>
                                                    </ul>
                                        </div>
                                    </li>
                            <li class="w-head-menu-cnt-main-item ">
                                        <h3 class="tl">
                                            <a href="/others/" class="tl-link" data-statistic-module="2" data-statistic-moduleid="other">
                                                <i class="icon-btn"
                                                   style="background-image: url('images/nwqwn2u0owytnme4mi00ztq3lwfkmtatmzyynzaxnde4zte3.png');"
                                                >
                                                </i>
                                                其他</a>
                                        </h3>
                                        <div class="l">
                                            <ul>
                                                <li>
                                                            <a href="/others/others/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_others">
                                                                两性</a>
                                                        </li>
                                                    <li>
                                                            <a href="/others/star/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_star">
                                                                现场</a>
                                                        </li>
                                                    <li>
                                                            <a href="/others/xing/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_xing">
                                                                星秀</a>
                                                        </li>
                                                    <li>
                                                            <a href="/others/shenqu/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_shenqu">
                                                                神曲</a>
                                                        </li>
                                                    <li>
                                                            <a href="/others/duanpai/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_duanpai">
                                                                小视频</a>
                                                        </li>
                                                    <li>
                                                            <a href="/others/wenwan/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_wenwan">
                                                                文玩</a>
                                                        </li>
                                                    <li>
                                                            <a href="/others/daren/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_daren">
                                                                达人</a>
                                                        </li>
                                                    <li>
                                                            <a href="/others/ASMR/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_ASMR">
                                                                ASMR</a>
                                                        </li>
                                                    <li>
                                                            <a href="/others/school/" target="_blank" data-statistic-module="2" data-statistic-moduleid="other_school">
                                                                校园</a>
                                                        </li>
                                                    </ul>
                                        </div>
                                    </li>-->
                        </ul>
                        <div class="w-head-kan-cnt">
                            <ul>
                                <li><i class="icon-jysp"></i><a href="http://hgame.yy.com/index?from=yy" target="_blank" data-statistic-module="2" data-statistic-moduleid="hgame">交友速配</a></li>
                                <li><i class="icon-yyyz"></i><a href="http://pk.yy.com/" target="_blank" data-statistic-module="2" data-statistic-moduleid="pk">YY约战</a></li>
                                <li><i class="icon-zncj"></i><a href="http://www.zhiniu8.com/" target="_blank" data-statistic-module="2" data-statistic-moduleid="zhiniu">知牛财经</a></li>
                                <li><i class="icon-ybjy"></i><a href="http://www.100.com/?source=edubanner&tab=2&tab=1" target="_blank" data-statistic-module="2" data-statistic-moduleid="edu">100教育</a></li>
                            </ul>
                        </div>
                    </div>
                </dd>
            </dl>

            <dl id="wHeadMenu" class="w-head-menu"> <dt class="w-head-menu-tl"><a href="javascript:;" rel="nofollow"><span class="t">全站导航</span><i class="tri"></i><i class="tri2"></i></a></dt>
                <dd class="w-head-menu-cnt w-head-drag">
                    <i class="w-head-drag-tri"></i>
                    <i class="w-head-drag-tri2"></i>
                    <i class="w-head-drag-enterstage"></i>
                    <div class="w-head-drag-main">
                        <div class="w-head-menu-cnt-main-intro">
                        	<div class="s1">
                                <h3 class="tl">服务</h3>
                                <div class="l">
                                    <ul>
                                    	<li><a  data-stat-bak1="33"  href="//pay.duowan.com/" target="_blank" data-statistic-module="8" data-statistic-moduleid="0">充值</a></li>
                                    		<li><a  data-stat-bak1="32"  href="http://show.vip.yy.com/index.html?src=diamond.yyhomepage" target="_blank" data-statistic-module="8" data-statistic-moduleid="0">YY紫钻</a></li>
                                    		<li><a  data-stat-bak1="34"  href="http://yue.yy.com/userIndex" target="_blank" data-statistic-module="8" data-statistic-moduleid="0">Y阅</a></li>
                                    		<li><a  data-stat-bak1="70"  href="http://bbs.yy.com/" target="_blank" data-statistic-module="8" data-statistic-moduleid="0">YY论坛</a></li>
                                    		<li><a  data-stat-bak1="13"  href="http://vip.yy.com/" target="_blank" data-statistic-module="8" data-statistic-moduleid="0">YY会员</a></li>
                                    		<li><a  data-stat-bak1="36"  href="http://open.yy.com/" target="_blank" data-statistic-module="8" data-statistic-moduleid="0">开放平台</a></li>
                                    		</ul>
                                </div>
                            </div>
                            <div class="s2">
                                <h3 class="tl">下载</h3>
                                <div class="l">
                                    <ul>
                                    	<li><a  data-stat-bak1="38"  href="/download" target="_blank" data-statistic-module="8" data-statistic-moduleid="1">手机YY</a></li>
	                                       	<li><a  data-stat-bak1="66"  href="/yy8/" target="_blank" data-statistic-module="8" data-statistic-moduleid="1">YY PC客户端</a></li>
	                                       	<li><a  data-stat-bak1="42"  href="http://shoupin.yy.com/" target="_blank" data-statistic-module="8" data-statistic-moduleid="1">手游语音</a></li>
	                                       	<li><a  data-stat-bak1="43"  href="http://hello.yy.com/" target="_blank" data-statistic-module="8" data-statistic-moduleid="1">语音交友</a></li>
	                                       	<li><a  data-stat-bak1="64"  href="http://jy.yy.com/?from=yy" target="_blank" data-statistic-module="8" data-statistic-moduleid="1">YY交友</a></li>
	                                       	<li><a  data-stat-bak1="63"  href="http://www.zhiniu8.com/app " target="_blank" data-statistic-module="8" data-statistic-moduleid="1">知牛财经</a></li>
	                                       	</ul>
                                </div>
                            </div>
                            <div class="s3">
                                <h3 class="tl">帮助</h3>
                                <div class="l">
                                    <ul>
                                    	<li><a data-stat-bak1="67" href="/1608/335371836342.html" target="_blank" data-statistic-module="8" data-statistic-moduleid="2">管理条例</a></li>
	                                        <li><a data-stat-bak1="47" href="/help/" target="_blank" data-statistic-module="8" data-statistic-moduleid="2">帮助中心</a></li>
	                                        <li><a data-stat-bak1="48" href="http://kf.yy.com/" target="_blank" data-statistic-module="8" data-statistic-moduleid="2">客服中心</a></li>
	                                        <li><a data-stat-bak1="49" href="http://udb.yy.com/" target="_blank" data-statistic-module="8" data-statistic-moduleid="2">安全中心</a></li>
	                                        <li><a data-stat-bak1="50" href="http://www.yy.com/index/t/feedback" target="_blank" data-statistic-module="8" data-statistic-moduleid="2">反馈问题</a></li>
	                                        </ul>
                                </div>
                            </div>
                            <div class="s4">
                                <h3 class="tl">开播</h3>
                                <div class="l">
                                    <ul>
                                       <li><a  data-stat-bak1="71"  href="http://m.yy.com/zone/help/index.html" target="_blank" data-statistic-module="8" data-statistic-moduleid="3">开播帮助</a></li>
	                                        <li><a  data-stat-bak1="73"  href="http://m.yy.com/zone/notice/index.html#tag_starChannelList" target="_blank" data-statistic-module="8" data-statistic-moduleid="3">直播公告</a></li>
	                                        <li><a  data-stat-bak1="72"  href="/1406/265981063476.html" target="_blank" data-statistic-module="8" data-statistic-moduleid="3">平台合作</a></li>
	                                        </ul>
                                </div>
                            </div>
                            </div>
                    </div>
                </dd>
            </dl>

            <div class="w-head-download"><a href="javascript:;" class="w-head-info-download"><i class="icon"></i>下载</a>
                <div class="w-head-menu-cnt w-head-drag w-head-download-drag"><i class="w-head-drag-tri"></i><i class="w-head-drag-tri2"></i><i class="w-head-drag-enterstage"></i>
                    <div class="w-head-drag-main">
                        <ul class="w-head-download-cnt">
                            <li class="w-head-download-item w-head-download-img">
                                <a  class="app-link" data-statistic-module="7" data-statistic-moduleid="0"><img src="{{URL::asset('home/images/yy2wm-447d81cafa.png')}}" alt="手机YY"><span class="app-txt">手机YY</span></a>
                            </li>
                            <li class="w-head-download-item"><a href="/yy8/" data-statistic-module="7" data-statistic-moduleid="1">YY PC客户端</a></li>
                            <li class="w-head-download-item"><a href="/index/t/download" data-statistic-module="7" data-statistic-moduleid="2">软件下载中心</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="wHeadWatchhistory"></div>
            <script type="text/tmpl" id="wHeadTplWatchHistory">
                <div yy-on="mouseenter: watchhistorymouseenter, mouseleave: watchhistorymouseleave" class="w-head-watchhistory"><a href="javascript:;" class="w-head-info-watchhistory"><i class="icon"></i>观看</a>
                    <div class="w-head-menu-cnt w-head-drag w-head-watchhistory-drag"><i class="w-head-drag-tri"></i><i class="w-head-drag-tri2"></i><i class="w-head-drag-enterstage"></i>
                        <div yy-el="subWatchHistoryBox" class="w-head-drag-main"><div class="w-head-watchhistory-cnt">
                                        <div class="w-head-loading"><i class="icon"></i></div>
                                    </div></div>
                    </div>
                </div>
            </script>

            <div id="wHeadFocusarea"></div>
            <script type="text/tmpl" id="wHeadTplFocus">
                <div yy-on="mouseenter: focusmouseenter, mouseenter: popClose, mouseleave: focusmouseleave" class="w-head-focusarea">
                    <a href="javascript:;" class="w-head-info-focus" data-stat-act-type="4" data-statistic-module="5" data-statistic-moduleid="0"><i class="icon"> </i>订阅<span yy-el="popMsgNum" class="new-message">0</span></a>
                    <div yy-el="focusDrag" class="w-head-menu-cnt w-head-drag w-head-focus-drag">
                        <i class="w-head-drag-tri"></i>
                        <i class="w-head-drag-tri2"></i>
                        <i class="w-head-drag-enterstage"></i>
                        <div class="w-head-drag-main">
                            <div yy-el="focusBlank" class="w-head-blank-cnt">
                                <div class="w-head-blank"><span class="t">登录后可查看订阅</span></div>
                                <div class="login-btn"><a href="javascript:;" yy-on="click: login" data-statistic-module="5" data-statistic-moduleid="3" rel="nofollow">登录</a></div>
                            </div>
                            <div yy-el="focusWrap" class="w-head-tabs">
                                <ul>
                                    <li yy-on="mouseenter:tabsmouseenter" class="w-head-tabs-att-item current"><span>订阅主播</span></li>
                                    <li yy-on="mouseenter:tabsmouseenter" class="w-head-tabs-sub-item"><span>订阅节目</span></li>
                                </ul>
                            </div>
                            <div class="w-head-tabs-att current nano">
                                <div class="w-head-loading"><i class="icon"></i></div>
                                <div yy-el="attFocusBox" class="w-head-drag-main-cnt nano-content"></div>
                            </div>
                            <div class="w-head-tabs-sub nano">
                                <div class="w-head-loading"><i class="icon"></i></div>
                                <div yy-el="subFocusBox" class="w-head-drag-main-cnt nano-content"></div>
                            </div>
                        </div>
                    </div>
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
            <script type="text/tmpl" id="wHeadTplLogin">
                <div yy-on="mouseenter: infomouseenter, mouseleave: infomouseleave" class="w-head-userarea {$showClass}">
                    <a class="w-head-info-cover" href="/u/{$yynum}" data-stat-act-type="15"><i class="w-head-sprite"></i><img src="picture/90eae8e67e56467bba9d91ba3937f933.gif" alt="{$nick}" class="img" onerror="this.onerror=null; this.src='//yyweb.yystatic.com/pc/images/default_portrait_34-c76240703c.png'"></a>
                    <div class="user-avatar-info w-head-menu-cnt w-head-drag w-head-info-drag">
                        <i class="w-head-drag-tri"></i>
                        <i class="w-head-drag-tri2"></i>
                        <i class="w-head-drag-enterstage"></i>
                        <a yy-on="click: refreshHeaderUserInfo" class="refresh-btn" href="javascript:;" title="刷新"><i class="icon-refresh"></i>刷新</a>
                        <div class="user-avatar-info-inner">
                            <a class="user-cover" href="/u/{$yynum}" data-stat-act-type="15"><i class="w-head-sprite"></i><img src="picture/90eae8e67e56467bba9d91ba3937f933.gif" alt="{$nick}" class="img" onerror="this.onerror=null; this.src='//yyweb.yystatic.com/pc/images/default_portrait_34-c76240703c.png'"></a>
                            <div class="nickname">{$nick}</div>
                            <div class="medal-icons">
                                <a yy-on="click: nobleIconClick, mouseenter: iconmouseenter, mouseleave: iconmouseleave" class="icon-noble noble-grade-{$nobleLevel}" href="javascript:void(0);" title="{nobleLevelZero}点亮身份象征，尽享尊贵特权！{endnobleLevelZero}{isNoble}主人，你有点腻害呀！{endisNoble}">
                                </a>
                                {hadCherish}
                                <a yy-on="click: cherishIconClick, mouseenter: iconmouseenter, mouseleave: iconmouseleave" href="javascript:void(0);" title="团勋章：{$cherishGroupName}" class="icon-cherish icon-hadCherish"></a>
                                {endhadCherish}
                                {hadNotCherish}
                                <a yy-on="click: cherishIconClick, mouseenter: iconmouseenter, mouseleave: iconmouseleave" href="javascript:void(0);" title="喜欢就要会表达，为TA开个珍爱吧！" class="icon-cherish"></a>
                                {endhadNotCherish}
                            </div>
                            {sign}
                            <div class="personal-sign"><i class="icon-arrow"></i><p class="txt">{$sign}</p>
                            </div>
                            {endsign}
                            {hasHonour}
                            <div class="honour-level">
                                <div class="honour-current-level">{$nobleLevelName}<span>{$honourLevel}</span></div>
                                <div class="honour-progress">
                                    <div class="progress-bg"></div>
                                    <div style="width:{$honourRatio}%" class="progress-bar {ratioFull}progress-bar-full{endratioFull}"></div>
                                    <div class="progress-num">{$curHonour}/{$goalHonour}</div>
                                </div>
                            </div>
                            {endhasHonour}
                            <div class="money-info">
                                <div class="text-node">Y 币
                                    <div class="fortune"><i class="icon-yymoney"></i>{$yyMoney}</div><a href="//pay.duowan.com/userDepositDWAction.action" target="_blank" class="link">充值</a> </div>
                                <div class="text-node">红钻
                                    <div class="fortune"><i class="icon-diamond"></i>{$diamond}</div><a href="//m.yy.com/zone/entertain/mall-index.html#tag_medal" target="_blank" class="link">兑换</a> </div>
                            </div>
                            <hr/>
                            <div class="link-ctnr"><a href="/u/{$yynum}" target="_blank" class="link-item my-home" data-stat-act-type="16"><i class="icon-people"></i>个人主页</a><a href="/ent/pay/index.action" target="_blank" class="link-item my-wallet"><i class="icon-wallet"></i>我的钱包</a></div>
                            <div class="logout-btn"><a href="javascript:;" yy-on="click: logout" data-stat-act-type="19">退出</a></div>
                        </div>
                    </div>
                </div>
                
                <div yy-el="popbox" class="w-head-pop-area"></div>
            </script>
            <script type="text/tmpl" id="wHeadTplFocusAtt">
                {zero}
                <div class="w-head-blank"><span class="t">您还没有订阅任何主播</span></div>
                {endzero} 
                {muti}
                <div class="l">
                    <ul>
                        {repeat}
                        <li class="{$type}">
                            <a href="{$link}" class="box" target="_blank" data-stat-act-type="6" data-statistic-module="5" data-statistic-moduleid="1">
                                <span class="w-head-info-cover-mini">
                                    <i class="w-head-sprite"></i>
                                    <img src="picture/2666f1e46a644c1b82fd70f17a5217eb.gif" width="30" height="30" alt="{$title}" class="img">
                                </span>
                                <span class="s1">{$author}</span>
                                <span class="usr"><i class="icon"></i><span class="t">{$hot}</span></span>
                                <i class="icon-live"></i>
                            </a>
                        </li>
                        {endrepeat}
                    </ul>
                </div>
                {endmuti} 
            </script>
            <script type="text/tmpl" id="wHeadTplFocusSub">
                {zero}
                <div class="w-head-blank"><span class="t">您还没有订阅任何节目</span></div>
                {endzero} 
                {muti}
                <div class="l">
                    {repeat}
                    <div class="predict-time {$current}"><i class="icon"></i>{$day}</div>
                    <ul>
                        {repeatsameday}
                        <li class="{$type}">
                            <a href="{$link}" class="box" data-stat-act-type="6" data-statistic-module="5" data-statistic-moduleid="2">
                                <span class="s1"><i class="time">{$time}</i><i class="txt">{$title}</i></span>
                                <i class="icon-live"></i>
                            </a>
                        </li>
                        {endrepeatsameday}
                    </ul>
                    {endrepeat}
                </div>
                {endmuti} 
            </script>
            <script type="text/tmpl" id="wHeadTplPop">
                <div yy-el="popitem" class="box muti">
                    <a href="javascript:;" yy-on="click: popClose" class="w-head-pop-close" data-stat-act-type="9">close</a>
                    {attsingle}
                    <a href="javascript:;" data-target="att" yy-on="click: popClose, click: focusmouseenter" class="box-cnt"  data-stat-act-type="8">
                        你关注的
                        <strong>{$attAuthor}</strong>
                        在直播
                    </a>
                    {attendsingle}
                    {attmuti}
                    <a href="javascript:;" data-target="att" yy-on="click: popClose, click: focusmouseenter" class="box-cnt"  data-stat-act-type="8">
                        你关注的
                        <strong>{$attAuthor}</strong>
                        等
                        <strong>{$attTotal}</strong>
                        人正在直播
                    </a>
                    {attendmuti}
                    {subsingle}
                    <a href="javascript:;" data-target="sub" yy-on="click: popClose, click: focusmouseenter" class="box-cnt"  data-stat-act-type="8">
                        你订阅的
                        <strong>{$subAuthor}</strong>
                        节目正在直播
                    </a>
                    {subendsingle}
                    {submuti}
                    <a href="javascript:;" data-target="sub" yy-on="click: popClose, click: focusmouseenter" class="box-cnt"  data-stat-act-type="8">
                        你订阅的
                        <strong>{$subAuthor}</strong>
                        等
                        <strong>{$subTotal}</strong>
                        个节目正在直播
                    </a>
                    {subendmuti}
                </div>
            </script>
            <script type="text/tmpl" id="wHeadTplWatchHistorySub">
                <div class="w-head-watchhistory-cnt">
                    <div class="w-head-loading"><i class="icon"></i></div>{zero}
                    <div class="w-head-blank"><span class="t">暂无观看记录</span> </div>{endzero} {muti}
                    <div class="l">
                        <ul>{repeat}
                            <li class="{$isLive}"><a href="/{$sid}/{$ssid}" class="box" data-statistic-module="6" data-statistic-moduleid="0"><span class="s1">{$name}</span><i class="icon-live"></i></a></li>{endrepeat} </ul>
                    </div>{endmuti} {nologin}
                    <div class="login-btn"><a href="javascript:;" yy-on="click: login" rel="nofollow" data-statistic-module="6" data-statistic-moduleid="1">登录</a></div>{endnologin} </div>
            </script>


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
                                             <input  placeholder="帐号\邮箱\YY号\手机号" type="text" style="width:300px;height:40px;margin-bottom:20px" id="account" ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input  placeholder="密码" type="password" style="width:300px;height:40px;margin-bottom:20px" id="passwords"></td>
                                    </tr>
                                    <tbody class="tbody"></tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript:;" id="login_do">登录</a>
                                       </td>
                                    </tr>
                                </table>
                            </div>                                    
                        </div>
                        </div>
                    </div>

                <div class="register" style="display:none">

<script>
   $('#login_do').click(function(){
       var account = $('#account').val(); //alert(account);
       var password = $('#passwords').val();
       if(account!='' && password!=''){
           $.ajax({
               data:{account:account,password:password},
               dataType:"json",
               type:"get",
               url:"login",
               success:function(e){
                  if(e==2){
                      var str ='<tr><td><strong>用户名或密码错误请重新登录</strong></td></tr>'
                      $('.tbody').html(str);
                  }else{
                      $('#loginWrap').toggle();
                      $('.account-login-mask').toggle();
                      $.each(e,function(i,v){
                          $('.s1').html('<i class="icon-people"></i><span id="login_user">'+v.username+'</span>');
                      })
                  }
               }
           })
       }
   })
   $(document).on('mouseover','#login_user',function(){
       $('.w-head-nologin').removeClass().addClass('w-head-nologin current');

   })
   $(document).on('mouseleave','.w-head-menu-cnt',function(){

       $('.w-head-nologin').removeClass().addClass('w-head-nologin');
   })
</script>

             <table >
            <tr>
                <td><input type="hidden" name="_token" value="<?php echo csrf_token();  ?>"><input type="text" name="username" id="username" placeholder="您的账户名和登录名" onblur="checkName()" style="width:260px;height:40px;margin-bottom:10px">  <span id="user"></span>    
                </td>       
            </tr>
            <tr>
                <td><input type="password" name="password" id="set" placeholder="密码：建议至少两种字符组合" onkeyup="valid_pass()" style="width:260px;height:40px;margin-bottom:10px"><span id="password"></span></td>
            </tr>
            <tr>
                <td><input type="password" name="pwd" id="reset" onblur="que()" placeholder="请再次输入密码" style="width:260px;height:40px;margin-bottom:10px"><span id="pwd"></span></td>
            </tr>
            <tr>
                <td><input type="text" name="telephone" onblur="confirm_tel()" id="telephone" placeholder="建议使用常用手机" style="width:260px;height:40px;margin-bottom:10px"><span id="tel"></span></td>
            </tr>
            <tr>
                <td>
            <input type="text" name="captcha" onblur="check_yan()" placeholder="请输入验证码" style="width:260px;height:40px;margin-bottom:10px"><span id="aa"></span>
            <a onclick="JavaScript:re_captcha();" >
                <img src="verify/1" alt="验证码" title="刷新图片" width="100" height="40" id="verify" border="0">
            </a>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="tel_yan" placeholder="请输入手机验证码
                " style="width:260px;height:40px;margin-bottom:10px" id="confirm" onblur="message()"><span id="yan"></span>
            <input type="button" style="height:32px;width:70px;" value="发送" onclick="sendCode(this)" />
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox">阅读并同意<a href="" style='text-decoration:none;'> 《直播协议》&nbsp;</a><a href="" style='text-decoration:none;'> 《隐私注册》 </a></td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" value="立即注册" style="background-color:red;height:32px;width:200px;border:0" id="submit" onclick="mySubmit()"></td>
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
<script>

$(document).on('click','#close',function(){
    $('#loginWrap').toggle();
    $('.account-login-mask').toggle();

})


       
    var obj = Object();
 
           $('#register-btn').click(function(){
               // alert(1);
                 $('.yin').hide();
                 $('.register').show();
           })

           $('#login-btn').click(function(){
                $('.yin').show();
                $('.register').hide();
           })



    function re_captcha() {
       $url = "verify";
       $url = $url + "/" + Math.random();
       document.getElementById('verify').src=$url;
    }
///////////////////////////////////用户名////////////////////////////////////////
  function checkName()
  {
    obj['username'] = $('#username').val();
    if(username!=''){
        $.ajax({
            data:obj,
            dataType:"json",
            type:"get",
            url:"checkName",
            success:function(e){
                 if(e==1){
                    $('#user').html('该用户已存在');
                    flag = false;
                 }else{
                    $('#user').html('');
                    flag = true;
                 }

            }
        })
    }
  }

/////////////////////////////////////////验证码、/////////////////////////////////////////
   flag=false;
function check_yan()
{
      var captcha=document.getElementsByName('captcha')[0].value;
      if(yan!=''){
          $.ajax({
            data:{captcha:captcha},
            dataType:"json",
            type:"get",
            url:"getCode",
            success:function(e){
                if(e==0){
                    $('#aa').html('错');
                    flag = false;
                }else{
                    $('#aa').html('对');
                    flag = true;
                }          
            }
          })
      }
}

//////////////////////////////密码、、////////////////////////////////////
    function valid_pass() 
    {  
        var str = $('#set').val(); 
        obj['password'] = str;
        var reg = new RegExp(/^(?![^a-zA-Z]+$)(?!\D+$)/);
      
      if (str == null || str.length < 6) {        
             $('#password').html("密码至少含有6个字符");  
                flag =  false;
       }else{
            if (reg.test(str)!=0){
               $('#password').html("对"); 
                flag =  true;
            }else{
                $('#password').html("密码由字母和数字组成"); 
                flag =  false;
            }
                                      
            if(str.length>20) {  
               $('#password').html("密码最多含有20个字符");  
                flag = false;  
            }  
       }
     
            return flag; 
    }      

////////////////////////////确认密码、、、、、、、、、、、///////////////////////
   function que()
   {
      var pwd=$('#reset').val();
      var password=$('#set').val();
        if(password!=''&&pwd==password&&pwd!=''){
             $('#pwd').html('对');
             falg = true;
        }else if(password==''&&pwd==''){
               $('#pwd').html('');
            flag = false;
        }else{
             $('#pwd').html('密码不一致');
             flag = false;
        }
   }
  
//////////////////////////手机号、、、、、、////////////////////////////////////
  function confirm_tel()
  {
    var telephone= $('#telephone').val();    //alert(telephone);
    obj['telephone'] =  telephone;
    var reg=/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/;
     if(telephone!=''){
          if(reg.test(telephone)==1){        
               $.ajax({
                   data:obj,
                   dataType:"json",
                   type:"get",
                   url:"telCheck",
                   success:function(e){
                     if(e==1){
                           $('#tel').html('対'); 
                           falg = true; 
                       }else{
                           $('#tel').css('color','red').html('该账号已被占用');
                       }
                   }
               })
          }else{
              $('#tel').html('格式有误');
              flag = false;
          }
    }
  }

/////////////////////////////////手机验证码////////////////////////////////////
 
///////////////////////////1. 发送短信////////////////////////////////////////


///////////////////////////2.验证短信验证码  ////////////////////////////////////////////
    function message()
    {     
     var message =$('#confirm').val();
      //alert(message);
     if(message!=''){
       $.ajax({
                data:obj,
                type:"get",
                dataType:"json",
                url:"message",
                success:function(e){
                    if(e==1){
                       $('#yan').html('对');
                    }else{
                       $('#yan').html('错');
                    }
                }
            })
       }
    }

/////////////////////////////////表单提交 、、、、、、、、、、////////////////
  

 


//////////////////////////////////////////////////////////////////////////////////////
//发送验证码给手机 
 var clock = '';
 var nums = 60;
 var btn;
     function sendCode(thisBtn)
     { 
         btn = thisBtn;
         btn.disabled = true; //将按钮置为不可点击
         btn.value = '等待'+nums+'秒';
         clock = setInterval(doLoop, 1000); //一秒执行一次
         

         var telephone = $('#telephone').val();
         alert(telephone);
         $.ajax({
             data:{telephone:telephone},
             dataType:"json",
             type:"get",
             url:"sendTemplate",
             success:function(e){
                 if(e==1){
                    $('#yan').html('发送成功');
                    //flag = true;
                 }else{
                    $('#yan').html('发送失败');
                    //falg = false;
                 }
             }
         })
    }

     function doLoop()
     {
         nums--;
         if(nums > 0){
          btn.value ='等待'+nums+'秒';
         }else{
          clearInterval(clock); //清除js定时器
          btn.disabled = false;
          btn.value = '点击发送验证码';
          nums = 60; //重置时间
         }
     }



        </script>
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
<script>
    
     function mySubmit(){ 

        if(falg==false){
            return false;
        }else{
            $.ajax({
                data:obj,
                type:"get",
                dataType:"json",
                url:"register",
                success:function(e){
                    if(e){
                         $('#loginWrap').toggle();
                         $('.account-login-mask').toggle();
                        $('.w-head-info-nologin').html('<a href="javascript:;" yy-on="click: login" class="s1" data-stat-act-type="1" data-statistic-module="4" rel="nofollow"><i class="icon-people"></i><span id="login_user">'+obj.username+'</span></a>');
                                                                              
                    }
                }
            })

        }     
    }  





</script>
</div>
<!-- - login-box-->
<!-- + login-box-mask-->
<div class="account-login-mask"></div>
<!-- - login-box-mask-->
<!-- - head-->


<script>
			var flashUrlPrefix = '//weblbs.yystatic.com/';
        	header({ current: '首页' });
        </script> 
 		<!-- + body here-->
        <div class="wrapper" data-stat-eventid="10008897" data-stat-bak1="index">
            <!-- 1001_1100 -->
            <div id="banner-bg"  data-bgcolor="">
	<div id="banner-fg" class="banner-wrap">
		<script>
		 /*   header.onresize(function() {
		        var $bannerFg = $('#banner-fg'),
                    $bannerBg = $('#banner-bg'),
                    imgFg = '',
                    imgBg = '';
                if (!$('html').hasClass('w960')) {
                    imgFg = $bannerFg.attr('data-image1');
                    imgBg = $bannerBg.attr('data-image1');
                    // $bannerBg.css('height', '1024px');
                } else {
                    imgFg = $bannerFg.attr('data-image2');
                    imgBg = $bannerBg.attr('data-image2');
                    // $bannerBg.css('height', '824px');
                }
                $bannerFg.css('background-image', 'url(' + imgFg + ')');
                
                if (imgBg && $.trim(imgBg).length) {
                	$bannerBg.css('background', "{{URL::asset('home/images/5b3cd445f4cc4d30ac95017ae99f7c80.gif')}}" ,'repeat-x');
                } else {
                    imgBg = $bannerBg.attr('data-bgcolor');
                    $bannerBg.css('background', imgBg);
                }
		    });*/
		</script>

		<div class="bg-link" data-stat-bak2="1001" data-stat-bak3="17" data-stat-name="首页静默直播模块">
                   <!-- <a href="/c/9696520/index.htm" target="_blank" class="b-lft" data-stat-parm1="157" data-stat-act-type="17"></a>
                    <a href="/c/9696520/index.htm" target="_blank" class="b-rgt" data-stat-parm1="157" data-stat-act-type="17"></a> -->
                </div>
        <div class="banner-inner" data-tmpl-type="1001_1100">
            <div class="m">
                <ul class="pgwSlider">
                    <li> <img src="{{URL::asset('/home/images/phpQpUSyx1477290423.jpg')}}" alt="舞蹈" ></li>
                    <li> <img src="{{URL::asset('/home/images/phpV53RyC1492413996.jpg')}}" alt="荒野求生" /></li>
                    <li> <img src="{{URL::asset('/home/images/phpvsOO5N1488980196.jpg')}}" alt="老司机快上车" /></li>
                    <li> <img src="{{URL::asset('/home/images/phpl362Yo1463645681.jpg')}}" alt="上！王者" /></li>
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
			<a href="{{ url('/list/livelist/') }}?id=1" target="_blank" data-stat-parm1="1" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="5"><i class="icon-208"></i>音乐</a>
			</h3>
	<div class="hd-tags">
			</div>
	<a href="{{ url('/list/livelist/') }}?id=1" target="_blank" class="more" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="14">更多</a>
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
        <a href="{{url('/list/livelist')}}?id=2" target="_blank" data-stat-parm1="1" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="5"><i class="icon-202"></i>舞蹈</a>
    </h3>
    <div class="hd-tags"></div>
    <a href="{{url('/list/livelist')}}?id=2" target="_blank" class="more" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="14">更多</a>
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
            <a href="{{url('/list/livelist')}}?id=3" target="_blank" data-stat-parm1="1" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="5"><i class="icon-203"></i>脱口秀</a>
            </h3>
    <div class="hd-tags">
    </div>
    <a href="{{url('/list/livelist')}}?id=3" target="_blank" class="more" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="14">更多</a>
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
			<a href="{{url('list/livelist')}}?id=4" target="_blank" data-stat-parm1="1" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="5"><i class="icon-212"></i>户外</a>
			</h3>
	<div class="hd-tags">
	</div>
	<a href="{{url('list/livelist')}}?id=4" target="_blank" class="more" data-stat-parm2="" data-stat-parm3="" data-stat-act-type="14">更多</a>
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

        <!-- - body here-->
        <!-- + sidetool-->
<!-- - sidetool-->
<div class="w-foot">
            <div class="w-foot-main">
                <div class="w-foot-friendlink">
                        <p>
                            <strong>友情链接:</strong>
                        </p>
                        <ul class="list">
                            <li><a href="http://www.duowan.com/" target="_blank">多玩网</a></li>
                                <li><a href="http://news.4399.com/" target="_blank">4399游戏资讯</a></li>
                                <li><a href="http://www.tiantian.tv/" target="_blank">CCTV5直播</a></li>
                                <li><a href="http://www.dilidili.com/" target="_blank">嘀哩嘀哩</a></li>
                                <li><a href="http://www.lolshipin.com/" target="_blank">LOL视频</a></li>
                                <li><a href="http://sports8.cc/" target="_blank">cc体育吧</a></li>
                                <li><a href="http://www.xincheping.com" target="_blank">新车评网</a></li>
                                <li><a href="http://www.tvapk.net/" target="_blank">电视家网</a></li>
                                <li><a href="http://www.azhibo.com/" target="_blank">NBA直播</a></li>
                                <li><a href="http://www.tvsou.com/" target="_blank">搜视网</a></li>
                                <li><a href="http://www.360zhibo.com/" target="_blank">足球直播</a></li>
                                <li><a href="http://www.boosj.com/" target="_blank">视频网站</a></li>
                                <li><a href="http://www.hiyd.com" target="_blank">健身</a></li>
                                <li><a href="http://www.zhiniu8.com" target="_blank">股票直播</a></li>
                                <li><a href="http://lol.duowan.com/LPL/" target="_blank">LPL</a></li>
                                <li><a href="http://www.kuaikanmanhua.com/" target="_blank">快看漫画</a></li>
                                <li><a href="http://langrensha.yy.com/" target="_blank">欢乐狼人杀</a></li>
                                <li><a href="http://v.256.cc" target="_blank">256影视</a></li>
                                <li><a href="http://www.9game.cn/" target="_blank">手游</a></li>
                                <li style="position: relative;"><a href="//www.yy.com/flinks" target="_blank">更多<i style="font-style: normal;position: absolute;top: -8px;left: 26px;font-size: 20px;">»</i></li>
                        </ul>
                    </div>
                <div class="w-foot-link">
                    <p><a href="http://www.huanju.cn/s/introduction.html"  rel="nofollow">关于欢聚</a><span>|</span><a href="/sitemap">网站地图</a><span>|</span><a href="/1406/265981063476.html"  rel="nofollow">联系欢聚</a><span>|</span><a href="http://m.yy.com/zone/notice/index.html#group16/M00/F8/4B/tz0M9Ve-kbMAAAAAAAAYQzI29qo70.html"  rel="nofollow">联系YY娱乐</a><span>|</span><a href="http://hr.yy.com/"  rel="nofollow">诚聘英才</a><span>|</span><a href="http://www.huanju.cn/1207/m_205353486825.html"  rel="nofollow">版权保护投诉指引</a><span>|</span>
                        <a
                        href="/1207/206018597708.html"  rel="nofollow">用户服务协议</a><span>|</span>客服频道：<strong><a href="yy://pd-[sid=10&subid=845374350]"  rel="nofollow">10</a></strong><span>|</span><a href="http://kf.yy.com/"  rel="nofollow">YY客服中心</a><span>|</span><a href="http://investors.yy.com/"  rel="nofollow">Investor Relations</a><span>|</span>
                            <a
                            href="http://www.100.com/"  rel="nofollow">100教育</a><span>|</span><a href="http://www.edu24ol.com/"  rel="nofollow">环球网校</a></p>
                    <p><a href="http://www.miibeian.gov.cn/"  rel="nofollow">粤ICP备09075143号</a><span>|</span><a href="http://res.yy.com/common/company_license/4.jpg" rel="nofollow">粤B2-20050785</a><span>|</span><a href="http://res.yy.com/common/company_license/3.jpg" rel="nofollow">增值电信业务经营许可证B2-20120219</a><span>|</span><a href="http://file.do.yy.com/group3/M02/CB/3A/tz0MYFZpIk-AatvLAAFwJNWoiww685.jpg" rel="nofollow">粤网文[2015]1712-302号</a><span>|</span><a href="javascript:;" rel="nofollow"><img src="{{URL::asset('home/images/j.gif')}}"/> 粤公网安备44011302000069号</a><span>|</span><a href="http://jubao.12377.cn:13225/reportinputcommon.do">中国互联网举报中心</a><span>|</span><a href="http://jb.ccm.gov.cn/" rel="nofollow">12318 全国文化市场举报网站</a>
                    </p>
                    <p><!-- <a href="//yyweb.yystatic.com/pc/images/company/4.jpg" rel="nofollow">视听许可证1910441号</a><span>|</span>--><a href="//yyweb.yystatic.com/pc/images/company/1.jpg" rel="nofollow">（总）出网证（粤）字014号</a><span>|</span><a href="//yyweb.yystatic.com/pc/images/company/2.jpg" rel="nofollow">节目制作经营许可证（粤）字01022号</a></p>
                    <p>广州华多网络科技有限公司 版权所有 © 2005-2017 YY.com , All rights reserved. 联系电话：020-82120010</p>
                </div>
            </div>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?c493393610cdccbddc1f124d567e36ab";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src="{{URL::asset('/home/js/require-a7d9d42513.js')}}" ></script>
        
<script type='text/javascript' id='1qa2ws' charset='utf-8' src="{{URL::asset('/home/js/_ta_qaz_app.js')}}"></script></body>

</html>
