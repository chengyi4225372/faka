<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\index\sdfahuo.html";i:1577542709;s:75:"C:\Users\Administrator\Desktop\faka\application\index\view\public\head.html";i:1577800834;s:75:"C:\Users\Administrator\Desktop\faka\application\index\view\public\foot.html";i:1577542709;}*/ ?>

<!DOCTYPE html> 

<html> 
<head>
        <meta charset="utf-8" />
        <title><?php echo $config['title']; ?></title>
        <meta name="keywords" content="<?php echo $config['keywords']; ?>" />
        <meta name="description" content="<?php echo $config['miao']; ?>" />
        <link rel="shortcut icon" href="<?php echo $config['logo']; ?>" />
        <script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
        <link href="/index/sink/css/css7.css" rel="stylesheet" type="text/css" />
        <link href="/index/sink/css/zzsc.css" rel="stylesheet" type="text/css" />
        <link href="/index/sink/css/layui.css" rel="stylesheet" type="text/css" />
        <link href="/index/sink/css/buttons.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/index/sink/js/Validform_v5.3.2_min.js"></script>
        <script type="text/javascript" src="/index/sink/js/layer/layer.js"></script>

        <style type="text/css">
            .info.denglu {
                line-height: 55px;
            }
            #head .top .logo_img {
                float: left;
                height: 80px;
                width: 400px;
                margin-top: 10px;
            }
            .dh {
                border-top: 3px solid #00A2CA;
                border-bottom: 5px solid #017390;
                background: #00A2CA;
            }
            ul#nav {
                background: #00A2CA;
            }
            .a2 {
                background: #017390;
            }
            ul#nav li a:hover {
                background: #017390;
            }
        </style>
    </head> 

    <body> 

        <div id="head">

            <div class="top">
                <div class="logo_img"><a href="/"><img src="<?php echo $config['images']; ?>" width="400" height="80"></a></div>
                    <?php if(empty(\think\Session::get('info')) || ((\think\Session::get('info') instanceof \think\Collection || \think\Session::get('info') instanceof \think\Paginator ) && \think\Session::get('info')->isEmpty())): ?>
                    <div class="info denglu">
                    <a class="button button-3d button-primary button-small" href="<?php echo url('login/login'); ?>">登陆</a>
                    <a class="button button-3d button-caution button-small" href="<?php echo url('login/reg'); ?>"><i class="fa fa-tag"></i>注册</a>&nbsp;&nbsp;
                    </div>
                    <?php else: ?>
                    <div class="info">

                        <span class="welcome">亲爱的：<?php echo \think\Session::get('info')['account']; ?><span class="lv"><b> </b></span>欢迎您！&nbsp;<span></span><br>

                            <a href="<?php echo url('user/index'); ?>" class="button button-primary button-rounded button-small">会员中心</a>
                            <a href="<?php echo url('login/lout'); ?>" class="button button-giant button-rounded button-small" onclick="return confirm('确定要退出吗？')">安全退出</a>

                        </span>
                    </div>
                    <?php endif; ?>
                
            </div>
            <div class="dh">
    <!-- todo 点击的时候就有class  -->
                <ul id="nav"> 
                    <li><a      href="/">商品首页</a></li>
                    <li><a      href="<?php echo url('index/search'); ?>">游客订单查询</a></li>
                    <li><a      href="<?php echo url('configcom/address'); ?>">兑换地址</a></li>
                    <li><a      href="<?php echo url('configcom/about'); ?>">关于我们</a></li>
                    <li><a      href="<?php echo url('configcom/help'); ?>">帮助中心？</a></li>
                </ul>

            </div>
        </div>
        <br/>


<style>
    #sycontent{
        display: none !important;
    }
</style>
      <div class="am-container" style="padding:2px">
      
<div style="padding:100px 20px;text-align:center;background-color:#fff">
  <img src="/index/images/fkcg.png" alt="付款成功" width="50px">
  <span style="height:60px;vertical-align:middle;font-size:24px;color:#333333">恭喜您！付款成功！</span>
  <p style="color:#999999">订单编号：<?php echo $info['order_no']; ?><br>支付金额：<?php echo floatval($info['countpay']); ?>元</p>
  <p style="color:#999999">订单信息：<?php echo $info['content']; ?></p>
  <a type="button" class="am-btn am-btn-success" href="<?php echo url('index/search'); ?>?orderno=<?php echo $info['order_no']; ?>">查看订单</a>
</div>
<div id="footer"><div>
    <a><?php echo $config['info']; ?></a>
</div></p><br/>
</div>

<script type="text/javascript">
    function htmlmsg(a, b) {
        layer.open({
            title: a,
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['410px', '170px'], //宽高
            content: '<div style="font-size: 12px;color: #f17100;margin:5px;border:5px;padding:5px;"> ' + b + ' </div>'
        });
    }

    function htmlmsg2(a, b) {
        layer.open({
            title: a,
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['390px', '180px'], //宽高
            content: '<div align=center><br/>点击下方的按钮进行查阅<br/><br/><a class="button button-3d button-primary button-rounded button-small" href="/Home/User/down/lb/2/id/' + b + '" target="_blank">查看卡密</a> <a class="button button-3d button-highlight button-rounded button-small" href="/Home/User/down/lb/1/id/' + b + '">下载保存</a> </div>'
        });
    }
</script>
</body> 

</html> 

