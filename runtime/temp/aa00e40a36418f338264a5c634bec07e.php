<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"C:\Users\Administrator\Desktop\faka\public/../application/admin\view\order\person.html";i:1577626552;s:79:"C:\Users\Administrator\Desktop\faka\application\admin\view\template\layout.html";i:1577542709;}*/ ?>
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
                        <select name="gid" id="gid" class="form-control">
                            <option value="">请选择...</option>
                            <?php if(is_array($goodes) || $goodes instanceof \think\Collection || $goodes instanceof \think\Paginator): $i = 0; $__LIST__ = $goodes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vv['id']; ?>" <?php if(\think\Request::instance()->get('gid') == $vv['id']): ?>selected="" <?php endif; ?> ><?php echo $vv['title']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type='text'  id="types" value="<?php echo \think\Request::instance()->get('paytype'); ?>" class="form-control" placeholder="请输入手机号或者订单号进行查询...">
                    </div>

                    <div class="form-group">
                        <button data-href="<?php echo url('order/person'); ?>"  class="btn btn-sm btn-primary search" type="button">
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

                <!--<div class="form-group">-->
                    <!--<button onclick="clear_form()" class="btn btn-info pull-right" type="button"><i-->
                            <!--class="fa  fa-eraser"></i> 删除未完成订单-->
                    <!--</button>-->
                <!--</div>-->

                <table class="table table-hover table-bordered datatable" width="100%">
                    <thead>
                    <tr>
                        <th>订单号</th>
                        <th>商品名称</th>
                        <th>数量</th>
                        <th>账号</th>
                        <th>价格</th>
                        <th>支付方式</th>
                        <th>状态</th>
                        <th>发货方式</th>
                        <th>联系方式</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tbody>
                    <tr>
                        <td><?php echo $vo['order_no']; ?></td>
                        <td><?php echo $goods[$vo['gid']]; ?></td>
                        <td><?php echo $vo['num']; ?></td>
                        <td>
                            <?php if(empty($vo['member_id']) || (($vo['member_id'] instanceof \think\Collection || $vo['member_id'] instanceof \think\Paginator ) && $vo['member_id']->isEmpty())): ?>
                                 游客
                            <?php else: ?>
                            <?php echo $info[$vo['member_id']]; endif; ?>
                        </td>
                        <td><?php echo $vo['countpay']; ?></td>
                        <td>
                            <?php if(isset($vo['types'])): ?>
                            <?php echo $vo['types']; endif; ?>
                        </td>
                        <td>
                            <?php switch($vo['status']): case "1": ?>
                            <a class="btn btn-block btn-success btn-xs">已支付</a>
                            <?php break; case "2": ?>
                            <a class="btn btn-block btn-linkedin btn-xs">已发货</a>
                            <?php break; case "3": ?>
                            <a class="btn btn-block btn-foursquare btn-xs">联系客服退款</a>
                            <?php break; default: ?>
                            <a class="btn btn-block btn-primary btn-xs">未支付</a>
                            <?php endswitch; ?>
                        </td>
                        <td>
                            <?php if($vo['huo'] == '0'): ?>
                            <a class="btn btn-block btn-flickr btn-xs">自动发货</a>
                            <?php else: ?>
                            <a class="btn btn-block btn-github btn-xs">手动发货</a>
                            <?php endif; ?>
                        </td>
                        <td><?php echo $vo['mobile']; ?></td>
                        <td><?php echo $vo['create_time']; ?></td>
                        <td class="td-do">
            
                            <a onclick='budan(this)' data-id='<?php echo $vo['id']; ?>' data-href="<?php echo url('order/budan'); ?>" class="btn btn-success btn-xs" title="修改">
                                <i class="fa fa-pencil">补单</i>
                            </a>
                        
                            <a  data-href="<?php echo url('order/pedit',array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-xs pedit" title="修改">
                                <i class="fa fa-pencil">编辑订单</i>
                            </a>
                            <a class="btn btn-danger btn-xs del" title="删除" data-id="" data-href="<?php echo url('order/pdel',array('id'=>$vo['id'])); ?>">
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
            $('.pedit').click(function(){
                var url = $(this).attr('data-href');
                layer.open({
                        type: 2,
                        title: '编辑订单',
                        shadeClose: true,
                        shade: false,
                        area: ['50%', '80%'],
                        content: url,
                    })
            });

            //删除
            $('.del').click(function(){
               var url = $(this).attr('data-href');
               layer.confirm('您确定删除？',
                   {btn:['确定','取消']},
                    function(){
                       $.get(url,function(ret){
                           if(ret.code ==200){
                             layer.msg(ret.msg,function(){
                                 parent.location.reload();
                             })
                           }
                           if(ret.code == 400){
                             layer.msg(ret.msg,function(){
                                 parent.location.reload();
                             })
                           }
                       })
                    },
                   function(){
                    parent.layer.close();
                   }
               )
            });

            $('.search').click(function(){
                var url     = $(this).attr('data-href');
                var gid     = $('#gid option:selected').val();
                var paytype = $('#types').val();

                if(gid ==  '' || gid==undefined){
                    layer.msg('请选择商品');
                    return ;
                }

                if(paytype ==  '' || paytype==undefined){
                    layer.msg('请输入订单号或者手机号查询');
                    return ;
                }

                location.href= url+"?gid="+gid+"&paytype="+paytype;

            })

            /** 补单 */
            function budan(obj){
                var urls = $(obj).attr('data-href');
                var id   = $(obj).attr('data-id');
                if(urls  == '' || urls  == undefined){
                    return false;
                }

                $.get(urls,{'id':id},function(ret){
                      if(ret.code == 200){
                          layer.msg(ret.msg,{icon:6},function(){
                              parent.location.reload();
                          })
                      }

                      if(ret.code == 400){
                          layer.msg(ret.msg,{icon:5},function(){
                              parent.location.reload();
                          })
                      }
                },'json')
            }
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
