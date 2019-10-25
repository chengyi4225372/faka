<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:108:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\mobile\trade.html";i:1571190412;s:103:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\mobilehead.html";i:1571186975;}*/ ?>
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
            <a href="/recharge" class="current">余额充值</a>
            <a href="/myorder" class="current">我的订单</a>
            <a href="/mychongzi" class="current">资金记录</a>
            <a href="/editpwd" class="current">修改密码</a>
			    	</div>
        <p><a href="#" class="shaixuan_colos">关闭</a></p>
    </div>
  </div>
  </div>


    <?php if(empty(\think\Session::get('get.member')) || ((\think\Session::get('get.member') instanceof \think\Collection || \think\Session::get('get.member') instanceof \think\Paginator ) && \think\Session::get('get.member')->isEmpty())): ?>
	<div class="m_user w">&nbsp;&nbsp;<a href="/search">游客订单查询</a>
	&nbsp;&nbsp;&nbsp;&nbsp;【<a href="/login">登录</a>】&nbsp;&nbsp;【<a href="/reg">注册</a>】
    </div>
   <?php else: ?>
     <div class="m_user w">
         <a><b>你好,</b></a>
         <a>余额:元</a>
    <a href="/lout" onclick="return confirm('确定要退出吗？')">【安全退出】</a>
     </div>
  <?php endif; ?>
<style>
    .bl_view_word img{
        width: 100%;
    }
</style>
<div class="view w">
    <div class="bl_view_img"><img src="<?php echo $info['images']; ?>"  alt="<?php echo $info['title']; ?>" /></div>
    <div class="bl_view_title"><?php echo $info['title']; ?> </div>
    <div class="bl_view_tag">
        <div class="bl_view_price">零售价：<?php echo $info['money']; ?> 元</div>

        <div class="bl_view_mall">批发价：<?php echo $info['pipay']; ?> 元 ( <?php echo $info['pinum']; ?> 个起按批发价)</div>
    </div>
    <div class="bl_view_tag">
        <div class="bl_view_user">商品类型：
           <?php if($info['huo'] == '0'): ?>
            <img src="/mobile/sink/img/zdfh.png">
             <?php else: ?>
            <img src="/mobile/sink/img/sdfh.png">
          <?php endif; ?>
        </div>
        <div class="bl_view_time">销量：<?php echo $info['paynum']; ?>个</div>
    </div>

    <div class="bl_view_title">商品库存：

        <font size="2" color="#FF7200"> 库存 个</font>
    </div>

    <form action="/buy" id="p_form" method="post">
        <input type="hidden" name='gid' value=''>

        <div class="bl_view_title">手机号码：
            <input class="search_input2" type="tel" name="mobile" placeholder="请输入联系方式" required>
        </div>

        <div class="bl_view_title">

            <input class="search_input2" type="tel" name="moban[]" placeholder="" required>
        </div>




        <div class="bl_view_title"> 购买数量：
            <input class="search_input2" id="p_num" name="num" type="number" value="" min="" max="" placeholder="请输购买数量" required></div>
    </form>
    <input id="minnum" name="minnum" class="z" type="hidden" value="" >
    <input id="maxnum" name="maxnum" class="z" type="hidden" value="" >
    <input id="beishu" name="beishu" class="z" type="hidden" value="" >


        <div class="go_buy">
            <input type="submit" name="Submit" value="自助购买"  onclick="buy( , )" />
        </div>
</div>
<div class="m_userx w">
    <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=1111&site=qq&menu=yes">
        <img  style="CURSOR: pointer" border="0" SRC=/mobile/sink/img/pa alt="发送消息给我"></a>&nbsp;&nbsp;
    &nbsp;&nbsp;<a>客服QQ :<?php echo (isset($config['kefu']) && ($config['kefu'] !== '')?$config['kefu']:''); ?></a>
</div>
<div class="bl_view_content w">
    <h1>商品说明<span>具体使用方法请阅读商品说明</span></h1>
    <div class="bl_view_word">
     <?php echo (isset($info['content']) && ($info['content'] !== '')?$info['content']:''); ?>
    </div>
</div>



<div class="m_user w"> 	
    <a href="#">返回顶部</a>
</div>





</div>


<script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
<script src='/index/sink/js/layer/layer.js'></script>
<script>


     /*
     function buy(a,b) {
      var p_num = document.getElementById("p_num").value;
      var minnum = document.getElementById("minnum").value;
      var maxnum = document.getElementById("maxnum").value;
      var beishu = document.getElementById("beishu").value;
         if (p_num < minnum){
          layer.alert('最小购买数是'+minnum);
         document.getElementById("p_num").value = minnum;
         return false;
         }
       if (p_num > maxnum){
        layer.alert('最大购买数是'+maxnum);
        document.getElementById("p_num").value = maxnum;
         return false;
       }
                                    if(b == 2){
                                      $.ajax({
                                        //几个参数需要注意一下
                                        type: "POST", //方法类型
                                        dataType: "json", //预期服务器返回的数据类型
                                        url: "/ajaxbuy", //url
                                        data: $('#p_form').serialize(),
                                        success: function(result) {
                                            if (result.status == 1) {
                                                layer.msg(result.msg, function() {
                                                    window.location.href = "/buy?gid="+result.gid+"&order_no="+result.order_no;
                                                });
                                            } else {
                                                layer.msg(result.msg);
                                            }
                                            ;
                                        },
                                        });
                                      return false;
                                    }
                                    if (a >= (parseInt(p_num)*parseInt(beishu))) {
                                        $.ajax({
                                        //几个参数需要注意一下
                                        type: "POST", //方法类型
                                        dataType: "json", //预期服务器返回的数据类型
                                        url: "/ajaxbuy", //url
                                        data: $('#p_form').serialize(),
                                        success: function(result) {
                                            if (result.status == 1) {
                                                layer.msg(result.msg, function() {
                                                    window.location.href = "/buy?gid="+result.gid+"&order_no="+result.order_no;
                                                });
                                            } else {
                                                layer.msg(result.msg);
                                            }
                                            ;
                                        },
                                        });
                                    } else {
                                        layer.alert('库存不足！');
                                    }
                                }
      */

    </script>
</body>
</html> 