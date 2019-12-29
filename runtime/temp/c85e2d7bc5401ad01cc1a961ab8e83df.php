<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"C:\Users\Administrator\Desktop\faka\public/../application/admin\view\leveluser\index.html";i:1577618447;s:79:"C:\Users\Administrator\Desktop\faka\application\admin\view\template\layout.html";i:1577542709;}*/ ?>
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
        <div class="box">
            <div class="box-body">
                <form class="form-inline" name="searchForm"  method="GET">

                    <div class="form-group">
                        <input type='text'  id="types" value="<?php echo \think\Request::instance()->get('keywords'); ?>" class="form-control" placeholder="请输入订单号进行查询...">
                    </div>

                    <div class="form-group">
                        <button data-href="<?php echo url('leveluser/index'); ?>"  class="btn btn-sm btn-primary search" type="button">
                            <i class="fa fa-search"></i> 查询
                        </button>
                    </div>

                    <div class="form-group">
                        <button onclick="clear_form()" class="btn btn-sm btn-" type="button"><i
                                class="fa  fa-eraser"></i> 清空查询
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">

            <div class="box-body table-responsive">

                <table class="table table-hover table-bordered datatable" width="100%">
                    <thead>
                    <tr>
                        <th>订单号</th>
                        <th>升级用户</th>
                        <th>支付类型</th>
                        <th>支付金额</th>
                        <th>描述</th>
                        <th>支付状态</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tbody>
                    <tr>
                        <td><?php echo $vo['order']; ?></td>
                        <td><?php echo $members[$vo['mid']]; ?></td>
                        <td><?php echo $vo['types']; ?></td>
                        <td><?php echo floatval($vo['paymoney']); ?></td>
                        <td><?php echo $vo['descs']; ?></td>
                        <td>
                           <?php if($vo['status'] == '1'): ?>
                            已支付
                            <?php else: ?>
                            未支付
                            <?php endif; ?>
                        </td>
                        <td><?php echo date('Y-m-d,H:i:s',$vo['create_time']); ?></td>
                        <td class="td-do">

                            <a data-href="<?php echo url('leveluser/edit',array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-xs edit" title="修改">
                                <i class="fa fa-pencil">查看详情</i>
                            </a>
                            <a class="btn btn-danger btn-xs del" title="删除"  data-href="<?php echo url('leveluser/del'); ?>" data-id="<?php echo $vo['id']; ?>">
                                <i class="fa fa-trash">删除</i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </div>
        <?php echo $list->render();; ?>

        <script>
            //编辑
            $('.edit').click(function(){
                var url = $(this).attr('data-href');
                layer.open({
                    type: 2,
                    title: '查看订单',
                    shadeClose: true,
                    shade: false,
                    area: ['50%', '60%'],
                    content: url,
                })
            });
           //删除
            $('.del').click(function(){
                var url = $(this).attr('data-href');
                var id  = $(this).attr('data-id');
                layer.confirm('是否确定删除？', {
                    btn: ['确定','取消'] //按钮
                }, function(){
                    $.get(url,{'id':id},function(ret){
                        if(ret.code == 200){
                            layer.msg(ret.msg,{icon:6},function(){
                                parent.location.reload();
                            });
                        };

                        if(ret.code == 400){
                            layer.msg(ret.msg,{icon:5},function(){
                                parent.location.reload();
                            });
                        }
                    },'json')
                }, function(){
                    parent.layer.close();
                });
            });
            //搜索
            $('.search').click(function(){
                var url = $(this).attr('data-href');
                var paytype =$('#types').val();

                if(paytype ==  '' || paytype==undefined){
                    layer.msg('请输入需要搜索的订单号进行查询');
                    return ;
                }
                location.href= url+"?keywords="+paytype;
            })
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
