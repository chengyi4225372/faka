<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\configcom\search.html";i:1567323883;s:75:"C:\Users\Administrator\Desktop\faka\application\index\view\public\head.html";i:1567323883;s:75:"C:\Users\Administrator\Desktop\faka\application\index\view\public\foot.html";i:1567323883;}*/ ?>

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
                    <li><a      href="<?php echo url('configcom/search'); ?>">游客订单查询</a></li>
                    <li><a      href="<?php echo url('configcom/address'); ?>">兑换地址</a></li>
                    <li><a      href="<?php echo url('configcom/about'); ?>">关于我们</a></li>
                    <li><a      href="<?php echo url('configcom/help'); ?>">帮助中心？</a></li>
                </ul>

            </div>
        </div>



        <br/>



<style type="text/css">
    .query {
        padding: 25px;
        min-height: 300px;
    }
    .query .in {
        height: 45px;
        border: 1px solid #ff6600;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        width: 65%;
        margin-right: auto;
        margin-left: auto;
        overflow: hidden;
    }
    .query .in .in_l {
        float: left;
        width: 80%;
        height: 100%;
    }
    .query .in .in_r {
        float: right;
        height: 100%;
        width: 20%;

    }
    .query .in input {
        margin: 0px;
        border-top-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
        border-top-style: none;
        border-right-style: none;
        border-bottom-style: none;
        border-left-style: none;
        height: 100%;
        width: 100%;
        line-height: 45px;
        font-size: 18px;
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 1%;
    }
    .query .in .in_r input {
        cursor: pointer;
        background-color: #F60;
        font-size: 20px;
        line-height: 45px;
        color: #FFF;
        font-weight: bold;
        padding: 0px;
        width: 100%;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }
    #kong .query .title {
        text-align: center;
        height: 50px;
        line-height: 50px;
        margin-bottom: 15px;
    }
    .title2 {
        text-align: center;
        height: 25px;
        line-height: 25px;
        margin-bottom: 15px;
        font-size: 14px;
        color: #ff253a;
    }</style>
<div id="kong">
    <div class="query">
        <div class="title">请输入订单号，交易单号，手机号查询</div>
        <form action="<?php echo url('configcom/serach'); ?>" method="post">
            <div class="in">
                <div class="in_l"><input type="text" name="content" placeholder="请输入订单号查询"></div>
                <div class="in_r"><input type="submit" value="订单查询"></div>
            </div>
        </form><br>
         <div class="title2">注意：超过24小时的订单禁止查询，如果您想长期保留订单，请您注册成为我们的会员。</div>
        <br><font size="4" color="#000000" title="这是您最近的购买记录">这是您的购买记录</font>
        <br> <table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tbody><tr>
            <th scope="col">类型</th>
            <th scope="col">订单号</th>
            <th scope="col">名称</th>
            <th scope="col">数量</th>
            <th scope="col">单价</th>
            <th scope="col">总价</th>
            <th scope="col">状态</th>
            <th scope="col">日期</th>
            <th scope="col">操作</th>
        </tr>
        </tbody></table><br> <div class="text-right"><ul class="pagination">       <li><span class="rows">共0条</span> </li></ul></div></div>


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