<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:88:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\user\mychongzi.html";i:1577809875;s:79:"C:\Users\Administrator\Desktop\faka\application\index\view\public\userhead.html";i:1577610618;}*/ ?>
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
        <link rel="stylesheet" href="/index/sink/js/layui/css/layui.css" media="all">
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
                        <span class="sr-only">
                            <a href="/" target="_blank">首页</a>
                        </span>
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

                            <li <?php if($path == url('user/index')): ?> class="list-group-item active" <?php else: ?> class="list-group-item" <?php endif; ?>>
                                <a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i> 会员中心</a>
                            </li>

                            <li <?php if($path == url('user/myorder') or $path == url('user/mychongzi')): ?> class="list-group-item active" <?php else: ?> class="list-group-item" <?php endif; ?>>
                                <a href="<?php echo url('user/myorder'); ?>"><i class="fa fa-shield fa-fw"></i> 订单管理</a>
                            </li>

                            <li <?php if($path == url('user/recharge') or $path == url('user/vip')): ?> class="list-group-item active" <?php else: ?> class="list-group-item" <?php endif; ?>>
                                <a href="<?php echo url('user/recharge'); ?>"><i class="fa fa-plane fa-fw"></i> 充值中心</a>
                            </li>

                            <li class="list-group-item ">
                                <a href="/"><i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;&nbsp;回到首页</a>
                            </li>

                            <li class="list-group-item ">
                                <a href="<?php echo url('login/lout'); ?>"><i class="fa fa-sign-out fa-fw"></i> 安全退出</a>
                            </li>
                        </ul>

                    </div>
                </div>



<div class="col-md-9">

    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="page-header">充值中心</h2>
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief" >
                <ul class="layui-tab-title">
                    <li><a href="<?php echo url('user/myorder'); ?>">我的订单</a></li>
                    <li  class="layui-this"><a href="<?php echo url('user/mychongzi'); ?>">充值记录</a></li>
                </ul>
                <div class="layui-tab-content"></div>
            </div>
            <table class="layui-table">
                <colgroup>
                    <col width="150">
                    <col width="200">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>订单号</th>
                    <th>价格</th>
                    <th>状态</th>
                    <th>时间</th>
                </tr>

                </thead>

                <?php if(empty($paylist) || (($paylist instanceof \think\Collection || $paylist instanceof \think\Paginator ) && $paylist->isEmpty())): else: if(is_array($paylist) || $paylist instanceof \think\Collection || $paylist instanceof \think\Paginator): $i = 0; $__LIST__ = $paylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pay): $mod = ($i % 2 );++$i;?>
                <tbody>
                <tr>
                    <td><?php echo $pay['member_no']; ?></td>
                    <td><?php echo floatval($pay['pay']); ?></td>
                    <td>
                        <?php if($pay['status'] == '2'): ?>
                          未付款
                         <?php else: ?>
                          已付款
                        <?php endif; ?>
                    </td>
                    <td><?php echo date('Y-m-d,H:i',$pay['create_time']); ?></td>
                </tr>
                </tbody>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </table>
            <center>
                <!-- 分页-->
                <div class="pager">
                    <?php echo $paylist->render(); ?>
                </div>
            </center>
            <?php endif; ?>

        </div>
    </div>

</div>

</div>
</div>

</main>
</body>
</html>