<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:110:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\mobile\zdfahuo.html";i:1576499553;s:103:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\mobilehead.html";i:1576225073;}*/ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="欢迎光临" />
<meta name="applicable-device" content="mobile" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo $config['title']; ?></title>
<link href="/mobile/sink/css/frozen.css" rel="stylesheet" type="text/css">
<link href="/mobile/sink/css/public.css" rel="stylesheet" type="text/css" />
<link href="/mobile/sink/css/index.css" rel="stylesheet" type="text/css" />
<link href="/mobile/sink/css/login.css" rel="stylesheet" type="text/css">
<script src="/mobile/sink/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/mobile/sink/js/Validform_v5.3.2_min.js"></script>
<link href="/mobile/sink/css/owl.carousel.css" rel="stylesheet">
<script src="/mobile/sink/js/owl.carousel.min.js"></script>
<script src="/index/sink/js/layer/layer.js"></script>
</head>

<body>
<div class="mobile">

 <link href="/mobile/sink/css/baoliao.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
$(document).ready(function(){
	$(".shaixuan").click(function(event){
		event.stopPropagation();
		$(".shaixuan_box").show();
		$(".shaixuan_box").animate({right:'100%'});
		$("body,html").css("overflow","hidden");
		$(".shaixuan_box").css("overflow","auto");
		$('body').bind("touchmove",function(e){
                    e.preventDefault();
            });
	});
	$(".shaixuan_mall a").click(function(event){
		 $("body,html").css("overflow","auto");
		$(".shaixuan_box").animate({right:'-100%'});
		$(".shaixuan_box").hide(5);
		$("body").unbind("touchmove");
	});
});
</script>

<div class="header1">
    <header>
    <div class="header">
        <a class="new-a-back" href="javascript:history.back();"> <span>
        <img src="/mobile/sink/img/iconfont-fanhui.png"></span>
        </a>
      <div class="m_logo">
          <a href="#"><img src="/mobile/sink/img/m-index_02.png"></a>
      </div>
     <div class="header_right shaixuan">
        <img src="/mobile/sink/img/iconfont-shouye.png">
     </div>
      </div>
  </header>
    <div class="shaixuan_box">
	<div class="shaixuan_mall">
    	<h1>站点导航</h1>
        <div class="shaixun_item">
            <a href="/" class="current"></a>
            <a href="/" class="current">商品主页</a>
            <a href="<?php echo url('@index/user/recharge'); ?>" class="current">余额充值</a>
            <a href="<?php echo url('@index/user/myorder'); ?>" class="current">我的订单</a>
            <a href="<?php echo url('@index/user/mychongzi'); ?>" class="current">资金记录</a>
            <a href="<?php echo url('@index/user/editpwd'); ?>" class="current">修改密码</a>
	 </div>
        <p><a href="#" class="shaixuan_colos">关闭</a></p>
    </div>
  </div>
  </div>


    <?php if(empty(\think\Session::get('info')) || ((\think\Session::get('info') instanceof \think\Collection || \think\Session::get('info') instanceof \think\Paginator ) && \think\Session::get('info')->isEmpty())): ?>
	<div class="m_user w">&nbsp;&nbsp;<a href="<?php echo url('mobile/search'); ?>">游客订单查询</a>
	&nbsp;&nbsp;&nbsp;&nbsp;【<a href="<?php echo url('@index/login/login'); ?>">登录</a>】&nbsp;&nbsp;【<a href="<?php echo url('@index/login/reg'); ?>">注册</a>】
    </div>
   <?php else: ?>
     <div class="m_user w">
         <a><b>你好,<?php echo \think\Session::get('info.account'); ?></b></a>
         <a>余额:<?php echo (\think\Session::get('info.money') ?: '0'); ?>元</a>
    <a href="<?php echo url('login/lout'); ?>" onclick="return confirm('确定要退出吗？')">【安全退出】</a>
     </div>
  <?php endif; ?>
<div class="topliucheng"><img src="/sink/img/goumaizn04.png" title=""></div>
<div id="errorbg">
    <div class="wodetitle">以下是你购买的卡密，请直接浏览或下载保存</div>
    <div class="wu"></div>

    <div class="reg">

        <div class="wu"></div><div class="wu"></div><div class="wu"></div>

        <div class="from">

            <div class="from_off_2"></div>

            <div class="from_in_6" style="text-align: center; font-family: '微软雅黑'; font-size: 24px; color: #090;">点击下方的按钮进行查阅</div> 

        </div>

        <div class="wu"></div>
        <br/>
        <div class="from">
            <div align="center">
                <a class="button button-3d button-primary button-rounded button-small" href="<?php echo url('mobile/orderinfo'); ?>?orderno=<?php echo $info['order_no']; ?>" value="" />查看卡密</a>
                <a class="button button-3d button-highlight button-rounded button-small" href="<?php echo url('mobile/daochu'); ?>?orderno=<?php echo $info['order_no']; ?>"  value="" />下载文件</a>
            </div>

        </div>
        <div class="wu"></div> <br/> <div class="from"><div align="center"><font color="#FF0000">注意事项：网站定期清理过期订单，请注意存档，以免丢失</div></div></div>

</div>

<div class="wu"></div><div class="wu"></div><div class="wu"></div><div class="wu"></div><div class="wu"></div><div class="wu"></div><div class="wu"></div>

</div>
<div class="m_user w"> 	
    <a href="#">返回顶部</a>
</div>
