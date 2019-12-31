<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\mobile\index.html";i:1577797480;s:81:"C:\Users\Administrator\Desktop\faka\application\index\view\public\mobilehead.html";i:1577542709;}*/ ?>
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
<div class="top w">
    <div class="m_banner" >
      <?php echo (isset($shouye['content']) && ($shouye['content'] !== '')?$shouye['content']:''); ?>
    </div>
</div>



<div class="m_userx w">
    <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $config['kefu']; ?>&site=qq&menu=yes">
        <img  style="CURSOR: pointer" border="0" SRC=/mobile/sink/img/pa alt="发送消息给我"></a>&nbsp;&nbsp;
    &nbsp;&nbsp;客服<?php echo (isset($config['kefu']) && ($config['kefu'] !== '')?$config['kefu']:''); ?> </div>
<div class="search w">
    <form action="<?php echo url('mobile/search'); ?>" method="get">
        <input name="orderno" type="text" class="search_input" value="<?php echo \think\Request::instance()->get('orderno'); ?>" placeholder="请输入订单号查询">
        <input  type="submit" class="search_submit" value="查询">
    </form>
</div>
<div class="baoliao w">

    <div class="ui-tab-content">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a><br><div class="menux">
            <div align="center"><?php echo $categorys[$vo['cid']]; ?></div></div></a>

        <a data-href="<?php echo url('mobile/trade',['id'=>$vo['id']]); ?>" data-huo="<?php echo $vo['huo']; ?>" data-num="<?php echo $vo['num']; ?>" onclick="checknum(this)">
            <div class="baoliao_content">

                <?php if($vo['huo'] == '1'): ?>
                <div class="bl_img" style="position:relative"><img src="<?php echo $vo['images']; ?>" alt="<?php echo $vo['title']; ?>">
                    <div style="width: 100px;position:absolute;z-indent:2;left:2;top:55;">
                        <span class="bl_type" style="background-color:#029008;filter:alpha(opacity:50); opacity:0.7;">手动发货</span>
                    </div>
                </div>
                <?php else: ?>
                <div class="bl_img" style="position:relative"><img src="<?php echo $vo['images']; ?>" alt="<?php echo $vo['title']; ?>" >
                    <div style="width: 100px;position:absolute;z-indent:2;left:2;top:55;">
                        <span class="bl_type" style="filter:alpha(opacity:50); opacity:0.7;">自动发货</span>
                    </div>
                </div>
                <?php endif; ?>

                <div class="bl_right">
                    <div class="bl_title"><?php echo $vo['title']; ?></div>

                    <div class="bl_tag">
                        <?php if($vo['huo'] == '0'): ?>
                        <div class="bl_price">
                         <span class="bl_type" style="background-color:#0086EE;">
                         <span class="am-badge am-badge-primary" style="margin-left: 5px">库存(<?php echo $vo['num']; ?>)</span></span>&nbsp;
                            <span class="bl_type" style="background-color:#B187C1;">销量(<?php echo $vo['paynum']; ?>)</span> ￥<?php echo floatval($vo['money']); ?>&nbsp;&nbsp;&nbsp;
                            <font color="#F8A059">批发价￥<?php echo floatval($vo['pipay']); ?></font>
                        </div>
                        <?php else: ?>
                        <div class="bl_price">
                            <span class="bl_type" style="background-color:#0086EE;">
                              <span class="am-badge am-badge-success" style="margin-left: 5px">代充</span>
                              </span>&nbsp;
                            <span class="bl_type" style="background-color:#B187C1;">销量(<?php echo floatval($vo['paynum']); ?>)</span> ￥<?php echo floatval($vo['money']); ?>&nbsp;&nbsp;&nbsp;
                            <font color="#F8A059">批发价￥<?php echo floatval($vo['pipay']); ?></font>
                        </div>
                        <?php endif; ?>
                       </div>

                    </div>

                </div>
            </div>
        </a>
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </div>

    <div class="bl_more"> </div>

</div>
<!--筛选-->



<div class="m_user w">
    <a href="#">返回顶部</a>
</div>

</div>

<script>
function checknum(obj){
    var huo   = $(obj).attr('data-huo');
    var num   = $(obj).attr('data-num');
    var hrefs = $(obj).attr('data-href');
    if(huo == 1){
       window.location.href = hrefs;
    }
    
    if(num == '' || num ==0 || num == null || num == undefined || num == 'null'){
        layer.msg('该商品缺货，请勿购买！',{icon:5});
        return false;
    } 

    window.location.href = hrefs;

}
</script>
</body>
</html>