<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\login\reg.html";i:1567323883;s:80:"C:\Users\Administrator\Desktop\faka\application\index\view\public\loginhead.html";i:1567323883;s:80:"C:\Users\Administrator\Desktop\faka\application\index\view\public\loginfoot.html";i:1567323883;}*/ ?>

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
            <a class="navbar-brand" href="/" style="padding:6px 15px;"><img src="/static/index/sink/img/logo.png" style="height:40px;" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/" target="_blank">首页</a></li>
                <li><a href="tencent://message/?uin=26591626&Menu=yes" target="_blank">联系我们</a></li>
                <li class="dropdown">
                    <a href="/index/user/index.html" class="dropdown-toggle" data-toggle="dropdown">会员中心 <b class="caret"></b></a>
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
            <div class="logon-tab clearfix">
                <a href="<?php echo url('login/login'); ?>">登 录</a> <a class="active" href="<?php echo url('login/reg'); ?>">注 册</a> </div>
            <div class="login-main">

                <form  class="form-vertical">
                    <div class="form-group">
                        <label class="control-label required">邮箱<span class="text-success"></span></label>
                        <div class="controls">
                            <input type="text" name="email" id="email" data-rule="required;email" class="form-control input-lg" placeholder="邮箱">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">用户名</label>
                        <div class="controls">
                            <input type="text" id="user" name="user" onblur="check_name()" data-rule="required;username" class="form-control input-lg" placeholder="用户名必须3-30个字符">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">密码</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" data-rule="required;password" class="form-control input-lg" placeholder="密码必须6-30个字符">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">QQ</label>
                        <div class="controls">
                            <input type="text" id="qq" name="qq" class="form-control input-lg" placeholder="QQ号">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">验证码</label>
                        <div class="controls">
                            <div class="input-group input-group-lg">
                                <input type="text" name="captcha" class="form-control" placeholder="验证码" data-rule="required;length(4)" style="border-radius: 0;" />
                                <span class="input-group-addon" style="padding:0;border:none;">
                                <img src="<?php echo url('base/verify'); ?>" width="140" height="42" onclick="this.src = this.src"/>
                            </span>
                            </div>
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="button"   class="btn btn-primary btn-lg btn-block">注 册</button>
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
    $('.btn-block').click(function(){

            check_name();

            var data = {};

            data.email = $('#email').val();
            data.user  = $('#user').val();
            data.pwd   = $('#password').val();
            data.qq    = $('#qq').val();
            data.captcha = $("input[name='captcha']").val();

            var re = /^\w+@[a-zA-Z0-9]{2,10}(?:\.[a-z]{2,4}){1,3}$/;

            if(data.email == '' ||  re.test(data.email)== false){
                layer.tips('邮箱地址不合法','#email');
                return false;
            }

            if(data.user == '' ||  data.user== undefined){
                layer.tips('用户名不能为空','#user');
                return false;
            }

            if(data.pwd == '' ||  data.pwd== undefined){
                layer.tips('请输入密码','#password');
                return false;
            }

            if(data.qq == '' ||  data.qq== undefined){
                layer.tips('请输入qq账号','#qq');
                return false;
            }

            $.ajax({
                //几个参数需要注意一下
                type: "POST",//方法类型
                dataType: "json",//预期服务器返回的数据类型
                url: "<?php echo url('login/reg'); ?>" ,//url
                data: data,
                success: function (result) {
                    if (result.code == '200'){
                        layer.msg(result.msg, function(){
                            parent.location.href="<?php echo url('login/login'); ?>";
                        });
                    };
                    if(result.code == '401'){
                        layer.msg(result.msg, function(){
                            parent.location.reload();
                        });
                    };
                    if(result.code == '405'){
                        layer.msg(result.msg);
                        return false;
                    }

                },
            });
    });


    function check_name(){
        var name = $('#user').val();

        var url = "<?php echo url('login/check_name'); ?>";

        $.post(url,{account:name},function(ret){
             if(ret.code == '404'){
                 layer.tips(ret.msg,'#user');
                 $('#password').attr('disabled',true);
                 $('#qq').attr('disabled',true);
                 $("input[name='captcha']").attr('disabled',true);
             };
             if(ret.code == '200'){
                 layer.tips(ret.msg,'#user',{tips:[2,'#009688'],time:2000});
                 $('#password').removeAttr('disabled');
                 $('#qq').removeAttr('disabled');
                 $("input[name='captcha']").removeAttr('disabled');
             }
        },'json')
    }
</script>

</body>
</html>