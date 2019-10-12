<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:106:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\user\index.html";i:1570863217;s:101:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\userhead.html";i:1570866273;s:101:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\userfoot.html";i:1570864711;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $config['title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="renderer" content="webkit">

        <meta name="author" content="<?php echo $config['title']; ?>">

        <link rel="shortcut icon" href="<?php echo $config['logo']; ?>" />
        <link href="/index/sink/css/frontend.min.css" rel="stylesheet">
        <link href="/index/sink/css/user.css" rel="stylesheet">
        <script src="/index/sink/js/jquery-1.8.3.min.js" charset="utf-8"></script>
        <script src="/index/sink/js/layui/layui.js" charset="utf-8"></script>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]> -->
        <!--
         <script src="/assets/js/html5shiv.js"></script>
         <script src="/assets/js/respond.min.js"></script>
         -->
        <!--[endif]-->
        <script type="text/javascript">
            var require = {
                config: {"site": {"name": "PHPEN\u52a0\u5bc6", "cdnurl": "", "version": "1.0.1", "timezone": "Asia\/Shanghai", "languages": {"backend": "zh-cn", "frontend": "zh-cn"}}, "upload": {"cdnurl": "", "uploadurl": "ajax\/upload", "bucket": "local", "maxsize": "10mb", "mimetype": "php", "multipart": [], "multiple": false}, "modulename": "index", "controllername": "user", "actionname": "index", "jsname": "frontend\/user", "moduleurl": "\/index", "language": "zh-cn", "__PUBLIC__": "\/", "": "\/", "__CDN__": ""}};
        </script>

   
        <style>
            main.content{padding-top:80px;}
        </style>

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/" target="_blank">首页</a></li>
                        <li><a href="tencent://message/?uin=26591626&Menu=yes" target="_blank">联系我们</a></li>
                        <li class="dropdown">
                            <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 10px;height: 50px;">
                                <span class="avatar-img"><img src="//q.qlogo.cn/headimg_dl?dst_uin=QQ号码&spec=640" alt=""></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i>会员中心</a></li>
                                <li><a href="<?php echo url('user/editpwd'); ?>"><i class="fa fa-key fa-fw"></i>修改密码</a></li>
                                <li><a href="<?php echo url('login/lout'); ?>"><i class="fa fa-sign-out fa-fw"></i>注 销</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <main class="content">
        <style>
            .basicinfo {
                margin: 15px 0;
            }

            .basicinfo .row > .col-xs-4 {
                padding-right: 0;
            }

            .basicinfo .row > div {
                margin: 5px 0;
            }
            .viewmoney,.xred{font-family: arial;font-size:16px;color:#F60;}
        </style>
        <div id="content-container" class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidenav">
                        <ul class="list-group">
                            <li class="list-group-heading">会员中心</li>

                            <li class="list-group-item active">

                            <li class="list-group-item ">

                                <a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i> 会员中心</a>
                            </li>

                            <li class="list-group-item active">

                            <li class="list-group-item ">

                                <a href="<?php echo url('user/myorder'); ?>"><i class="fa fa-shield fa-fw"></i> 订单管理</a>
                            </li>


                            <li class="list-group-item active">

                            <li class="list-group-item ">

                                <a href="<?php echo url('user/recharge'); ?>"><i class="fa fa-plane fa-fw"></i> 充值中心</a>
                            </li>



                            <li class="list-group-item active">

                            <li class="list-group-item ">

                                <a href="<?php echo url('login/lout'); ?>"><i class="fa fa-sign-out fa-fw"></i> 安全退出</a>
                            </li>
                        </ul>

                    </div>
                </div>



<div class="col-md-9">
    <div class="panel panel-default ">
        <div class="panel-body">
            <h2 class="page-header">
                会员中心                        
<!--                <a href="/index/user/profile.html" class="btn btn-success pull-right">
                    <i class="fa fa-pencil"></i>
                    个人资料</a>-->
            </h2>
            <div class="row user-baseinfo">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Content -->
                    <div class="ui-content">
                        <!-- Heading -->
                        <h4>欢迎您：</h4>
                        <!-- Paragraph -->
                        <br/>
                        <div class="basicinfo">
                            <div class="row">
                                <div class="col-xs-4 col-md-2">会员级别</div>
                                <div class="col-xs-8 col-md-4">
                                    <span class="xred">
                                         无
                                        普通代理
                                        高级代理
                                    </span>
                                </div>
                                <div class="col-xs-4 col-md-2">账户余额</div>
                                <div class="col-xs-8 col-md-4">
                                    <a href="javascript:;" class="viewmoney"></a>
                                </div>
                            </div>
<!--                            <div class="row">
                                <div class="col-xs-4 col-md-2">QQ号码</div>
                                <div class="col-xs-8 col-md-4">123456</div>
                                <div class="col-xs-4 col-md-2">邮箱帐号</div>
                                <div class="col-xs-8 col-md-4">123456@qq.com</div>
                            </div>-->
                            <div class="row">
                                <div class="col-xs-4 col-md-2">注册时间</div>
                                <div class="col-xs-8 col-md-4">time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</main>



<footer class="footer" style="clear:both">
        <p class="copyright"><?php echo $config['info']; ?></p>
    </footer>




</body>
</html>