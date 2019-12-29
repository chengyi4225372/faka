<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\login\login.html";i:1577542709;s:80:"C:\Users\Administrator\Desktop\faka\application\index\view\public\loginhead.html";i:1577542709;s:80:"C:\Users\Administrator\Desktop\faka\application\index\view\public\loginfoot.html";i:1577542709;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录 -<?php echo $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">

    <meta name="author" content="<?php echo $config['title']; ?>">

    <link rel="shortcut icon" href="<?php echo $config['logo']; ?>" />

    <link href="/index/sink/css/frontend.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="/index/sink/css/layui.css"  media="all">
    <link href="/index/sink/css/user.css" rel="stylesheet">
    <style>
        main.content{padding-top:80px;}
    </style>
    <!-- seo -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?a251280bf86f57cd4043cbbb98c55f57";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- seo -->

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
            <a class="navbar-brand" href="/" style="padding:6px 15px;">
                <img src="/static/index/sink/img/logo.png" style="height:40px;" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" target="_blank">首页</a></li>
                <li><a href="tencent://message/?uin=26591626&Menu=yes" target="_blank">联系我们</a></li>
                <li class="dropdown">
                    <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown">会员中心 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url('login/login'); ?>"><i class="fa fa-sign-in fa-fw"></i> 登 录</a></li>
                        <li><a href="<?php echo url('login/reg'); ?>"><i class="fa fa-user-o fa-fw"></i> 注 册</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<main class="content">
    <div id="content-container" class="container">
        <div class="user-section login-section">
            <div class="logon-tab clearfix"> <a class="active" href="<?php echo url('login/login'); ?>">登 录</a>
                <a href="<?php echo url('login/reg'); ?>">注 册</a> </div>
            <div class="login-main">

                <form name="form" id="loginform" class="form-vertical" onsubmit='return false;'>
                    <div class="form-group">
                        <label class="control-label" for="account">账号</label>
                        <div class="controls">
                            <input class="form-control input-lg" id="account" type="text" name="user" value="" data-rule="required" placeholder="用户名" autocomplete="off">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">密码</label>
                        <div class="controls">
                            <input class="form-control input-lg" id="password" type="password" name="password" data-rule="required;password" placeholder="密码" autocomplete="off">
                        </div>
                    </div>
                    <!--                <div class="form-group">
                                        <div class="controls">
                                            <input type="checkbox" name="keeplogin" checked="checked" value="1"> 保持会话
                                            <div class="pull-right"><a href="javascript:;" class="btn-forgot">忘记密码?</a></div>
                                        </div>
                                    </div>-->
                    <div class="form-group">
                        <button type="button"  class="btn btn-primary btn-lg btn-block login">登 录</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>

<footer class="footer" style="clear:both">
    <p class="copyright"><?php echo $config['info']; ?></p>
</footer>



<script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
<script src='/index/sink/js/layer/layer.js'></script>
<script>
  $('.login').click(function(){


      let account = $('#account').val();
      let pwd     = $('#password').val();

      if(account =='' ||account ==undefined){
          layer.tips('用户名不能为空','#account');
          return ;
      }

      if(pwd =='' ||pwd ==undefined){
          layer.tips('密码不能为空','#password');
          return ;
      }

      $.ajax({
          //几个参数需要注意一下
          type: "POST", //方法类型
          dataType: "json", //预期服务器返回的数据类型
          url: "<?php echo url('login/login'); ?>", //url
          data:{account:account,pwd:pwd},
          success: function(ret) {
           if(ret.code  == '405'){
              layer.msg(ret.msg,{time:1500});
              return;
            };

           if(ret.code  == '403'){
                  layer.msg(ret.msg,{time:1500});
                  return;
              };
           if(ret.code == '500'){
               layer.msg(ret.msg,{time:1500});
               return ;
            };
           if(ret.code  == '200'){
                  layer.msg(ret.msg,{time:1500},function(){
                     parent.location.href="<?php echo url('@index/user/index'); ?>";
                  });
              };
          },
          error:function(ret){
              console.log(111);
          }
      });
  });
</script>

</body>
</html>