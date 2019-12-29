<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"C:\Users\Administrator\Desktop\faka\public/../application/admin\view\wconfig\setconfig.html";i:1577542709;s:79:"C:\Users\Administrator\Desktop\faka\application\admin\view\template\layout.html";i:1577542709;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title><?php echo (isset($webData['title']) && ($webData['title'] !== '')?$webData['title']:"后台管理"); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="application-name" content="BearAdmin">
    <meta itemprop="name" content="栗子发卡">
    <meta itemprop="image" content="/static/admin/images/touch-icon-iphone-retina.png">
    <meta name="author" content="">

    <link rel="stylesheet" href="/static/admin/css/app.min.css">

    <!--jquery -->

    <script src="/twomb/js/jquery.js"></script>

    <script>
        var dataDelIds = [];
    </script>
    <script src="/static/admin/js/app.min.js"></script>
    <script src="/static/admin/plugins/layer/layer.js"></script>
    <script src="/index/js/download.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if(\think\Session::get('error_message')): ?>
    <script>
        layer.msg('<?php echo \think\Session::get('error_message'); ?>',{icon:2});
    </script>
    <?php endif; if(\think\Session::get('success_message')): ?>
    <script>
        layer.msg('<?php echo \think\Session::get('success_message'); ?>',{icon:1});
    </script>
    <?php endif; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a class="logo">
            <span class="logo-mini"><b><?php echo (isset($webData['backend_name']) && ($webData['backend_name'] !== '')?$webData['backend_name']:''); ?></b>后台</span>
            <span class="logo-lg"><b><?php echo (isset($webData['backend_name']) && ($webData['backend_name'] !== '')?$webData['backend_name']:''); ?></b>管理后台</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">切换导航</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $webData['user_info']['avatar']; ?>" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"><?php echo $webData['user_info']['nickname']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo $webData['user_info']['avatar']; ?>" class="img-circle"
                                     alt="User Image">
                                <p>
                                    <?php echo $webData['user_info']['nickname']; ?>
                                    <small><?php echo $webData['user_info']['name']; ?></small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo url('admin_user/profile'); ?>" class="btn btn-default btn-flat">个人资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo url('auth/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="control-sidebar"><i class="fa fa-cog"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo $webData['user_info']['avatar']; ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php if(!empty($user_info['name'])): ?><?php echo $user_info['name']; endif; ?></p>
                    <a><i class="fa fa-circle text-success"></i> 正常</a>
                </div>
            </div>
            <form method="get" class="sidebar-form" id="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="搜索菜单" id="search-input">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </form>
            <ul class="sidebar-menu">
                <?php echo $webData['left_menu']; ?>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?php echo $webData['title']; ?>
            </h1>
            <ol class="breadcrumb">
                <?php if(isset($webData['current_nav']) && !empty($webData['current_nav'])): ?>
                <li><a href="<?php echo url('admin/index/index'); ?>"><i class="fa fa-home"></i> 主页</a></li>
                <?php echo $webData['current_nav']; endif; ?>
            </ol>
        </section>
        <section class="content">
            <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <form class="form-horizontal dataForm"  method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" value="<?php echo $info['id']; ?>" >

                <div class="box-body">
                    <div class="fields-group">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">网站标题</label>
                            <div class="col-sm-10 col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="title" name="title" value="<?php echo $info['title']; ?>" class="form-control" placeholder="网站标题">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="modou" class="col-sm-2 control-label">首页模板</label>
                                <div class="input-group iconpicker-container">
                                    默认模板： <input type="radio" name="modou" <?php if($info['modou'] == '1'): ?> checked="" <?php endif; ?>   value="1">
                                    商城模板： <input type="radio" name="modou" <?php if($info['modou'] == '2'): ?> checked="" <?php endif; ?>   value="2">
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="images" class="col-sm-2 control-label">导航栏图片</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group iconpicker-container">
                                    <input type="file" class="layui-btn" name="uploadImg" id="uploadImg" onchange="UploadImages();" />
                                    <div class="timeline-body">

                                        <img style="width:150px;height:100px;" src="<?php echo (isset($info['images']) && ($info['images'] !== '')?$info['images']:'http://placehold.it/150x100'); ?>" id="img1" class="margin">

                                        <input type="hidden" id="images" value="<?php echo $info['images']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="images" class="col-sm-2 control-label">网站logo</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group iconpicker-container">
                                    <input type="file" class="layui-btn" name="uploadImg1" id="uploadImg1" onchange="UploadLogo();" />
                                    <div class="timeline-body">

                                        <img style="width:150px;height:100px;" src="<?php echo (isset($info['logo']) && ($info['logo'] !== '')?$info['logo']:'http://placehold.it/150x100'); ?>" id="img2" class="margin">

                                        <input type="hidden" id="logo" value="<?php echo $info['logo']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="images" class="col-sm-2 control-label">手机二维码</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group iconpicker-container">
                                    <input type="file" class="layui-btn" name="uploadImg2" id="uploadImg2" onchange="UploadQcode();" />
                                    <div class="timeline-body">

                                        <img style="width:150px;height:100px;" src="<?php echo (isset($info['qcode']) && ($info['qcode'] !== '')?$info['qcode']:'http://placehold.it/150x100'); ?>" id="img3" class="margin">

                                        <input type="hidden" id="qcode" value="<?php echo $info['qcode']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">网站关键字</label>
                            <div class="col-sm-10 col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="keywords" name="keywords" value="<?php echo (isset($info['keywords']) && ($info['keywords'] !== '')?$info['keywords']:''); ?>" class="form-control" placeholder="网站关键字">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">网站描述</label>
                            <div class="col-sm-10 col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="miao" name="miao" value="<?php echo (isset($info['miao']) && ($info['miao'] !== '')?$info['miao']:''); ?>" class="form-control" placeholder="网站描述">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">客服qq</label>
                            <div class="col-sm-10 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="kefu" name="kefu" value="<?php echo $info['kefu']; ?>" class="form-control" placeholder="客服qq">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">qq群1</label>
                            <div class="col-sm-10 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="qq1" name="qq1" value="<?php echo $info['qq1']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">qq群2</label>
                            <div class="col-sm-10 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="qq2" name="qq2" value="<?php echo $info['qq2']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">qq群2</label>
                            <div class="col-sm-10 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="qq2" name="qq2" value="<?php echo $info['qq2']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nomal" class="col-sm-2 control-label">普通代理</label>
                            <div class="col-sm-10 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="nomal" name="nomal" value="<?php echo $info['nomal']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="high" class="col-sm-2 control-label">高级代理</label>
                            <div class="col-sm-10 col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="high" name="high" value="<?php echo $info['high']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">底部说明</label>
                            <div class="col-sm-10 col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa  fa-television"></i></span>
                                    <textarea  name="content" id="content" class="form-control" rows="5" placeholder="Enter ..."><?php echo $info['info']; ?></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="box-footer">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10 col-md-4">
                        <div class="btn-group">
                            <button type="button" class="btn flat btn-info dataform-submit addg">保存</button>
                        </div>
                        <div class="btn-group">
                            <button type="reset" class="btn flat btn-default dataform-reset">重置</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    function UploadImages(){
        var formdata = new FormData();

        var url = "<?php echo url('wconfig/UploadImg'); ?>";
        // 将文件追加到 formdata对象中。
        formdata.append("file",document.getElementById('uploadImg').files[0]);
        $.ajax({
            type: "POST",
            url: url,
            data:formdata,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (data) {
                if (data.code == '200') {
                    layer.msg(data.msg,{time:1000},function(){
                        $("#images").val(data.path);
                        $("#img1").attr('src',data.path);
                    })
                };

                if(data.code == '400'){
                    layer.msg(data.msg,{time:1500},function(){
                        location.reload();
                    });
                }


            },
            error: function(data){
                console.log(data);
            },
        });
    }

    function UploadLogo(){
        var formdata = new FormData();

        var url = "<?php echo url('wconfig/UploadImg'); ?>";
        // 将文件追加到 formdata对象中。
        formdata.append("file",document.getElementById('uploadImg1').files[0]);
        $.ajax({
            type: "POST",
            url: url,
            data:formdata,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (data) {
                if (data.code == '200') {
                    layer.msg(data.msg,{time:1000},function(){
                        $("#logo").val(data.path);
                        $("#img2").attr('src',data.path);
                    })
                };

                if(data.code == '400'){
                    layer.msg(data.msg,{time:1500},function(){
                        location.reload();
                    });
                }


            },
            error: function(data){
                console.log(data);
            },
        });
    }


    function UploadQcode(){
        var formdata = new FormData();

        var url = "<?php echo url('wconfig/UploadImg'); ?>";
        // 将文件追加到 formdata对象中。
        formdata.append("file",document.getElementById('uploadImg2').files[0]);
        $.ajax({
            type: "POST",
            url: url,
            data:formdata,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (data) {
                if (data.code == '200') {
                    layer.msg(data.msg,{time:1000},function(){
                        $("#qcode").val(data.path);
                        $("#img3").attr('src',data.path);
                    })
                };

                if(data.code == '400'){
                    layer.msg(data.msg,{time:1500},function(){
                        location.reload();
                    });
                }


            },
            error: function(data){
                console.log(data);
            },
        });
    }


</script>

<script>
    $('.addg').click(function(){
        var dat      = {};
        dat.title    = $('#title').val();
        dat.modou    = $("input[name='modou']:checked").val();
        dat.images   = $('#images').val();
        dat.logo     = $('#logo').val();
        dat.qcode    = $('#qcode').val();
        dat.keywords = $('#keywords').val();
        dat.miao     = $('#miao').val();
        dat.kefu     = $('#kefu').val();
        dat.qq1      = $('#qq1').val();
        dat.qq2      = $('#qq2').val();
        dat.content  = $('#content').val();
        dat.id       = $('#id').val();
        dat.nomal    = $('#nomal').val();
        dat.high     = $('#high').val();

        if( dat.title=='' || dat.title ==undefined ){
            layer.msg('商品名称不能为空',{time:2000});
            return false;
        }
        var url = "<?php echo url('wconfig/setconfig'); ?>";

        $.post(url,{dat:dat},function(ret){
            if(ret.code == '200'){
                layer.msg(ret.msg,{time:2000},function(){
                    parent.location.reload();
                });
            };
            if(ret.code == '400'){
                layer.msg(ret.msg,{time:2000},function(){
                    parent.location.reload();
                })
            }
        },'json');
    });
</script>

        </section>
    </div>

    <!--删除操作modal-->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">提示</h4>
                </div>
                <div class="modal-body">
                    <p id="modal_message">您确认执行本次操作吗？</p>
                    <input name="modal_do_url" id="modal_do_url" value="" placeholder="modal_do_url" type="hidden">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                    <button onclick="modal_do()" type="button" class="btn btn-primary">确认</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>V</b> 1.0
        </div>
        <strong>Copyright &copy; 2018 <a></a>.</strong> All rights
        reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
        <div class="tab-content">
            <div class="tab-pane" id="control-sidebar-home-tab">
            </div>
        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
</body>
</html>
<script src="/static/admin/js/demo.js"></script>
<script>
    $(function () {
        $('#sidebar-form').on('submit', function (e) {
            e.preventDefault();
        });

        $('.sidebar-menu li.active').data('lte.pushmenu.active', true);

        $('#search-input').on('keyup', function () {
            var term = $('#search-input').val().trim();

            if (term.length === 0) {
                $('.sidebar-menu li').each(function () {
                    $(this).show(0);
                    $(this).removeClass('active');
                    if ($(this).data('lte.pushmenu.active')) {
                        $(this).addClass('active');
                    }
                });
                return;
            }

            $('.sidebar-menu li').each(function () {
                if ($(this).text().toLowerCase().indexOf(term.toLowerCase()) === -1) {
                    $(this).hide(0);
                    $(this).removeClass('pushmenu-search-found', false);

                    if ($(this).is('.treeview')) {
                        $(this).removeClass('active');
                    }
                } else {
                    $(this).show(0);
                    $(this).addClass('pushmenu-search-found');

                    if ($(this).is('.treeview')) {
                        $(this).addClass('active');
                    }

                    var parent = $(this).parents('li').first();
                    if (parent.is('.treeview')) {
                        parent.show(0);
                    }
                }

                if ($(this).is('.header')) {
                    $(this).show();
                }
            });

            $('.sidebar-menu li.pushmenu-search-found.treeview').each(function () {
                $(this).find('.pushmenu-search-found').show(0);
            });
        });
    });
</script>
