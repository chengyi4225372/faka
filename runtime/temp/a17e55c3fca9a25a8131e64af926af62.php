<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:108:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\user\editpwd.html";i:1567152998;s:101:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\userhead.html";i:1576140186;s:101:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\userfoot.html";i:1576140011;}*/ ?>
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
                                <a href="<?php echo url('login/lout'); ?>"><i class="fa fa-sign-out fa-fw"></i> 安全退出</a>
                            </li>
                        </ul>

                    </div>
                </div>



<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="page-header">修改密码</h2>
            <form class="form-horizontal" role="form" data-toggle="validator">
                <div class="form-group">
                    <label for="oldpassword" class="control-label col-xs-12 col-sm-2">旧密码:</label>
                    <div class="col-xs-12 col-sm-4">
                        <input type="password" class="form-control" id="oldpwd" name="oldpwd" value="" data-rule="required" placeholder="旧密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="newpassword" class="control-label col-xs-12 col-sm-2">新密码:</label>
                    <div class="col-xs-12 col-sm-4">
                        <input type="password" class="form-control" id="newpwd" name="newpwd" value="" data-rule="required" placeholder="新密码" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="renewpassword" class="control-label col-xs-12 col-sm-2">确认新密码:</label>
                    <div class="col-xs-12 col-sm-4">
                        <input type="password" class="form-control" id="renewpwd" name="renewpwd" value="" data-rule="required" placeholder="确认新密码" />
                    </div>
                </div>

                <div class="form-group normal-footer">
                    <label class="control-label col-xs-12 col-sm-2"></label>
                    <div class="col-xs-12 col-sm-8">
                        <button type="button" class="btn btn-success btn-embossed edit-pwd">提交</button>
                        <button type="reset" class="btn btn-default btn-embossed">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</main>



<script>
    //Demo 事件
    layui.use('form', function() {
        var form = layui.form, layer = layui.layer,
            $ = layui.jquery;
        //监听提交
        form.on('submit(formDemo)', function(data) {
            //layer.msg(JSON.stringify(data.field));
            return true;
        });
    });
</script>


<footer class="footer" style="clear:both">
        <p class="copyright"><?php echo $config['info']; ?></p>
    </footer>



<script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
    <script src='/index/sink/js/layer/layer.js'></script>
<script>
 $('.edit-pwd').click(function(){
     var data = {};

     data.oldpwd   = $('#oldpwd').val();
     data.newpwd   = $('#newpwd').val();
     data.renewpwd = $('#renewpwd').val();

     if(data.oldpwd =='' || data.oldpwd ==''){
         layer.tips('旧密码不能为空','#oldpwd');
         return false;
     }


     if(data.newpwd =='' || data.newpwd ==''){
         layer.tips('新密码不能为空','#newpwd');
         return false;
     }

     if(data.renewpwd != data.newpwd){
         layer.tips('两次密码输入不一致','#renewpwd');
         layer.tips('两次密码输入不一致','#newpwd');
         return false;
     }
     var url = "<?php echo url('user/editpwd'); ?>";
     $.post(url,{data:data},function(ret){
         if(ret.code == 200){
             layer.msg(ret.msg,function(){
                 parent.location.reload();
             })
         };
         if(ret.code == 400){
             layer.msg(ret.msg,function(){
                 parent.location.reload();
             })
         };
         if(ret.code == 500){
             layer.msg(ret.msg,'#oldpwd');
             return false;
         }
     },'json')
 })
</script>
</body>
</html>