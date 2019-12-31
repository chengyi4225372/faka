<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\mobile\search.html";i:1577809205;s:81:"C:\Users\Administrator\Desktop\faka\application\index\view\public\mobilehead.html";i:1577802052;}*/ ?>
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
<!--<script src="/mobile/sink/js/owl.carousel.min.js"></script>-->
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
<div class="search w">
    <form action="<?php echo url('mobile/search'); ?>" method="get">
        <input name="orderno" type="text" value="<?php echo \think\Request::instance()->get('orderno'); ?>" class="search_input" placeholder="请输入订单号查询">
        <input  type="submit" class="search_submit" value="查询">
    </form>
</div>
<div class="menux">

    <div align="center">订单管理</div></div>
<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<div class="msg w">
    <div class="msg_title">&nbsp;
          <?php if($vo['huo'] == '1'): ?>
        <font class="bl_type" style="background-color:#ec5300;">手动发货</font>
          <?php else: ?>
        <font class="bl_type" style="background-color:#019bbc;">自动发货</font>
          <?php endif; ?>
        <font size="2" color="#cbcbcb"></font></div>
    <div class="msg_title2"> 

        <h1>商品：<a href="<?php echo url('mobile/trade'); ?>?id=<?php echo $vo['gid']; ?>"><?php echo $goods[$vo['gid']]; ?> </a></h1><span></span></div>

    <div class="msg_title2">
        记录： 下单成功！<br>
        </div>

    <div class="msg_content">总价<?php echo $vo['countpay']; ?> 元 数量<?php echo $vo['num']; ?>个
        <?php if($vo['status'] == 1): ?>
        <a  href="<?php echo url('mobile/orderinfo'); ?>?orderno=<?php echo $vo['order_no']; ?>" title="点击查看卡密" >
            <span class="bl_type" style="background-color:#c500e8;">提取卡密</span></a>
        <?php elseif($vo['status'] == 3): ?>
        <font style="cursor:pointer;" color="#ff4351">联系客服退款</font>
        <?php elseif($vo['status'] == 2): ?>
        <font style="cursor:pointer;" color="#ff4351">已发货</font>
        <?php elseif($vo['status'] == 0): ?>
        【<a href="<?php echo url('index/buy'); ?>?order_no=<?php echo $vo['order_no']; ?>&did=<?php echo $vo['id']; ?>">付款</a>】
        <?php else: ?>
        <font style="cursor:pointer" color="#CCCCCC">未发货</font>
        <?php endif; ?>
        【<a  style="cursor:pointer" onclick="del(this)" data-id="<?php echo $vo['id']; ?>" >删除</a>】
    </div>
</div>  
<?php endforeach; endif; else: echo "" ;endif; ?>
<!-- 分页-->

    <div class='text-right'>
       <?php echo $info->render();; ?>
    </div>



<div class="m_user w"> 	
    <a href="#">返回顶部</a>
</div>



<script src='/index/sink/js/layer/layer.js'></script>
<script type="text/javascript">
    function del(a) {
        layer.confirm('确定要删除订单吗？', {
            title: '确认信息',
            btn: ['确定', '取消'] //按钮
        }, function() {
             $.ajax({
            //几个参数需要注意一下
                type: "POST",//方法类型
                dataType: "json",//预期服务器返回的数据类型
                url: "<?php echo url('monile/delorder'); ?>" ,//url
                data: {order:a},
                success: function (ret) {
                    if(ret.code == 200){
                        layer.msg(ret.msg,function(){
                            parent.location.reload();
                        })
                    }
                    if(ret.code == 400){
                        layer.msg(ret.msg,function(){
                            parent.location.reload();
                        })
                    }
                },
            });
        });
    }

    function cuidan(a) {
        if (a == "") {
            layer.msg('条件丢失');
            return;
        }
        layer.confirm('确定要 ' + a + ' 的订单催单吗？', {
            title: '确认信息',
            btn: ['确定', '取消'] //按钮
        }, function() {
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/home/index/cuidan",
                dataType: "TEXT",
                        data: 'order=' + a,
                success: function(data) {
                    layer.msg('删除成功，客服会尽快为您处理！');
                    window.location.reload();
                }
            });
        });
    }
</script>

</div>
</body>
</html> 