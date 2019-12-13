<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:106:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\mobile\buy.html";i:1576222520;s:103:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\mobilehead.html";i:1576154465;}*/ ?>
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
            <a href="<?php echo url('user/recharge'); ?>" class="current">余额充值</a>
            <a href="<?php echo url('user/myorder'); ?>" class="current">我的订单</a>
            <a href="<?php echo url('user/mychongzi'); ?>" class="current">资金记录</a>
            <a href="<?php echo url('user/editpwd'); ?>" class="current">修改密码</a>
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
    <a href="<?php echo url('user/lout'); ?>" onclick="return confirm('确定要退出吗？')">【安全退出】</a>
     </div>
  <?php endif; ?>
<style>


.payment-icon-list ul, .payment-list ul {
    padding: 1px 0;
}



.payment-icon-list li.curr:after, .payment-list li.curr:after {
    content: '';
    position: absolute;
    width: 17px;
    height: 17px;
    background-image: url(/mobile/sink/cssimg/zf.png);
    bottom: 0;
    right: 0;
    background-position: 17px -119px;
}
.payment-list li {
    padding: 3px 3px;
    font-size: 14px;
    border: 1px solid #b4b7bf;
    border-radius: 3px;
    display: inline-block;
    position: relative;
    cursor: pointer;
    margin-right: 0px;
}
.payment-icon-list li.curr, .payment-list li.curr {
    border: 1px solid #0071ce;
	    border: 1px solid #db5b5a;
    color: #0071ce;
	   
}
.payment-icon-list li i, .payment-list li i {
    text-indent: -10000px;
    overflow: hidden;
    outline: 0;
}
.payment-icon-cft {
    background-image: url(/mobile/sink/cssimg/alipaym.png);
background-position: 0px -76px;
}
.payment-icon-wx {
    background-image: url(/mobile/sink/cssimg/wxpaym.png);
    background-position: 0px -75px;
}
.payment-icon-qq {
    background-image: url(/mobile/sink/cssimg/qqpaym.png);
    background-position: 0px 69px;
}

.payment-icon-yu {
    background-image: url(/mobile/sink/cssimg/yuem.png);
    background-position: 0px 70px;
}

.payment-icon-cft, .payment-icon-yu, .payment-icon-ms, .payment-icon-qq, .payment-icon-vs, .payment-icon-wx {
    display: inline-block;
    vertical-align: top;
    width: 99px;
    height: 30px;
}

em, i {
    font-style: normal;
    font-weight: 400;
}

</style>

 <div class="view w">
	   
<div class="bl_view_title">
    <div align="center">
         <strong><font color="#009f1e"  size="3">订单生成成功，请完成支付！</font></strong>
     </div>
</div>
    <div class="bl_view_title order">订单号码：<?php echo $order['order_no']; ?></div>
	<div class="bl_view_title paynames">商品名称：<?php echo $goods[$order['gid']]; ?><a href="javascript:;"></a></div>
	<div class="bl_view_title">商品单价：<?php echo $order['danpay']; ?>元</div>
	<div class="bl_view_title">购买数量：<font color="#ff0036"><?php echo $order['num']; ?>个</font>
        <?php if($order['huo'] == '0'): ?>
          自动发货
        <?php else: ?>
          人工发货
        <?php endif; ?>
    </div>
	<div class="bl_view_title">订单总价：<?php echo $order['countpay']; ?>元   &nbsp;&nbsp;
        <font color="#ee6500"  size="2">可用余额：<?php echo (\think\Session::get('info.money') ?: '***'); ?>元</font>
    </div>
	
<div class="bl_view_title"></div>
     <div class="bl_view_title">
         <div class="payment-list">
             <ul>
                 <?php if(!(empty(\think\Session::get('info')) || ((\think\Session::get('info') instanceof \think\Collection || \think\Session::get('info') instanceof \think\Paginator ) && \think\Session::get('info')->isEmpty()))): ?>
                 <li class="yu" data-paytype="yu" onclick="layer.msg('该功能正在开放中！！');"><i class="payment-icon-yu">余额支付</i></li>
                 <?php endif; ?>

                 <li class="tenpay" data-paytype="alipay">
                     <i class="payment-icon-cft">支付宝支付</i>
                 </li>

                 <li class="wx " data-paytype="wxpay" >
                     <i class="payment-icon-wx">微信支付</i>
                 </li>

                 <li class="qq" data-paytype="qqpay" >
                     <i class="payment-icon-qq">QQ支付</i>
                 </li>

             </ul>
         </div>
<script>
    $(".payment-list ul li").click(function () {
        $(this).parent().find('li').removeClass('curr');
        $(this).addClass('curr');
        var n = $(this).index();
        $("#payid").find("option").eq(n).attr("selected", true)
    })
	
</script>
 </div>
<!--     <form method="post">-->
         <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
         <input type="hidden" name="payment" id="<?php echo $order['countpay']; ?>">
<!--     </form>-->

     <div class="go_buy">
         <input type="button"  onclick="mobilePay()"  value="立即付款"/>
     </div>

     <font color="#FF0000" size="2"> 付款后请不要关闭窗口，等网页转跳会自动转跳到卡密页面。</font><br/>
     <font color="#CC0099" size="2">使用在线支付的用户，支付的过程中 有时候会多1分钱 二维码提示多少金额就必须付款多少，否则不能自动发货。</font></br>
     <font color="#0000FF" size="2">长期购买的客户建议充值到余额进行消费，发货速度更快。</font><br/> <br/>

 </div>

<div class="m_user w"><a href="#">返回顶部</a></div>
</div>

<script>
  /** 支付 **/
function mobilePay(){
      var  types = '';//支付类型
      var  goodnames = $.trim($('.paynames').text());//商品名称
      var  order_no  = $.trim($('.order').text());//商户订单号
      var  paynum    = $('#payment').val(); //商品总价
      var  sitename  = '栗子发卡网';
      var  url = "<?php echo url('pays/mobilepay'); ?>";

      if(types == '' || types == undefined){
          layer.msg('请选择支付类型');
          return false;
      }

      if(paynum == '' || paynum == undefined || paynum == 'undefined'){
          return false;
      }

      window.location.href=url+"?types="+types+"&goodnames="+goodnames+"&order_no="+order_no+"&paynum="+paynum+"&sitename="+sitename;

  }
/**注释
function alertMsg(id,num){
			if(num==0){
				layer.msg('库存已经不足，请联系站长上货！', {time: 1000,offset: '160px'});
				return;
			}
			layer.prompt(
				{
				  title: '请输入购买数量',
				  formType: 0,
				  value: '1',
				  offset: '100px'
				},
			function(val, index){				
				if(!/^[1-9][0-9]{0,10}$/.test(val)){
				    layer.msg('输入数量不对', {time: 1000,offset: '160px'});
					return;
				}
				if(val>num){
				  layer.msg('库存不足，最多可以购买'+num+'件', {time: 1000,offset: '160px'});
				  return;					
				}
				//location.href="/home/userbuy/order/id/"+id+"/num/"+val+"";
							  			 
			});
       }
**/
</script>

</body>
</html> 