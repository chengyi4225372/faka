<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:112:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/admin\view\admin_file\index.html";i:1565573409;s:101:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\admin\view\template\layout.html";i:1567134813;s:106:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\admin\view\template\data_footer.html";i:1565573409;}*/ ?>
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
            <link rel="stylesheet" type="text/css" href="/static/admin/plugins/dropzone/dropzone.min.css">
<style>
    .file-thumbnail {
        max-height: 64px;
        max-width: 64px;
    }
    .layui-layer-iframe{
        max-width: 650px;
        max-height: 550px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <form class="form-inline" name="searchForm" id="searchForm" action="" method="GET">
                    <div class="form-group">
                        <input value="<?php echo !empty($keywords)?$keywords : '' ;; ?>"
                               name="keywords" id="keywords" class="form-control input-sm" placeholder="输入关键词查询">
                    </div>
                    <div class="form-group">
                        <select name="file_type" id="file_type" class="form-control input-sm">
                            <option value="0">文件类型</option>
                            <option value="1" <?php if(isset($file_type) && $file_type==1): ?>selected<?php endif; ?> >图片</option>
                            <option value="2" <?php if(isset($file_type) && $file_type==2): ?>selected<?php endif; ?> >文档</option>
                            <option value="3" <?php if(isset($file_type) && $file_type==3): ?>selected<?php endif; ?> >压缩文件</option>
                            <option value="4" <?php if(isset($file_type) && $file_type==4): ?>selected<?php endif; ?> >音频</option>
                            <option value="5" <?php if(isset($file_type) && $file_type==5): ?>selected<?php endif; ?> >视频</option>
                            <option value="6" <?php if(isset($file_type) && $file_type==6): ?>selected<?php endif; ?> >其他</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-search"></i> 查询
                        </button>
                    </div>
                    <div class="form-group">
                        <button onclick="clear_form()" class="btn btn-sm btn-default" type="button"><i
                                class="fa fa-eraser"></i> 清空查询
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
            <div class="box-header">
                <a class="btn btn-danger btn-sm AjaxButton" title="批量删除，谨慎使用" data-id="checked" data-url="del.html">删除</a>
                <a class="btn btn-default btn-sm" data-toggle="modal"
                   data-target="#upload-modal">
                    <i class="fa fa-upload"></i>上传文件
                </a>
            </div>
            <div class="box-body table-responsive">
                <table id="datalist" class="table table-hover table-bordered datatable" width="100%">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="data-checkall" onclick="check_all(this)" class="checkbox" placeholder="全选/取消"></th>
                        <th>文件ID</th>
                        <th>文件名称</th>
                        <th>文件预览</th>
                        <th>文件大小</th>
                        <th>文件类型</th>
                        <th>上传时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$item): ?>
                    <tr>
                        <td><input type="checkbox" onclick="check_this(this)" name="data-checkbox" data-id="<?php echo $item['id']; ?>"
                                   class="checkbox data-list-check" value="<?php echo $item['id']; ?>" placeholder="选择/取消"></td>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['original_name']; ?></td>
                        <td class="text-center"><span><img src="<?php echo $item['thumbnail']; ?>" class="file-thumbnail"></span></td>
                        <td><?php echo $item['size']; ?></td>
                        <td><?php echo $item['file_type']; ?></td>
                        <td><?php echo $item['create_time']; ?></td>
                        <td class="td-do">
                            <a title="查看" data-id="<?php echo $item['id']; ?>" data-url="view" data-confirm="2" data-type="2" class="AjaxButton btn btn-default btn-xs">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a title="下载" target="_blank" href="download.html?id=<?php echo $item['id']; ?>" class="btn btn-success btn-xs">
                                <i class="fa fa-download"></i>
                            </a>
                            <a class="btn btn-danger btn-xs AjaxButton" title="删除" data-id="<?php echo $item['id']; ?>" data-url="del.html">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
    <?php echo $page; ?>
    <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">
        <?php if(isset($total)): ?>
        <small>共<?php echo $total; ?>条记录</small>
        &nbsp;
        <?php endif; ?>
        <small>每页显示</small>
        &nbsp;
        <select class="input-sm" onchange="changePageRows(this)">
            <option value="10" <?php if($webData['list_rows']==10): ?>selected=""<?php endif; ?>>10</option>
            <option value="20" <?php if($webData['list_rows']==20): ?>selected=""<?php endif; ?>>20</option>
            <option value="30" <?php if($webData['list_rows']==30): ?>selected=""<?php endif; ?>>30</option>
            <option value="50" <?php if($webData['list_rows']==50): ?>selected=""<?php endif; ?>>50</option>
            <option value="100" <?php if($webData['list_rows']==100): ?>selected=""<?php endif; ?>>100</option>
        </select>
        &nbsp;
        <small>条记录</small>
    </label>
</div>
        </div>

    </div>
</div>

<div class="modal" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby=updateModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">上传文件</h4>
            </div>
            <div class="modal-body">
                <form class="dropzone" id="dropzone" style="border: 2px dashed #d2d6de;">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal" id="upload-finished">确定</button>
            </div>
        </div>
    </div>
    <?php echo token(); ?>
</div>
<script type="text/javascript" src="/static/admin/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript">
    $('#upload-finished').click(function () {
        window.location.reload();
    });

    Dropzone.options.dropzone = {
        url: "upload.html",
        method: "post",
        paramName: "file",
        headers: {
            "__token__": $("input[name='__token__']").val()
        },
        maxFilesize: 2048,
        maxFiles: 50,
        acceptedFiles: ".jpg,.gif,.png,.bmp,.svg,.txt,.doc,.docx,.xls,.xlsx,.rar,.zip,.7z,.tar",
        dictMaxFilesExceeded: "您每次最多只能上传5个文件！",
        dictFileTooBig: "上传文件太大,无法上传!",
        dictInvalidFileType: "你不能上传该类型文件,文件类型只能是*.jpg,*.gif,*.png*.doc,*.docx,*.xlsx,*.rar,*.zip,*.7z,*.tar。",
        dictResponseError: "上传文件出错,请联系管理员!",
        dictDefaultMessage: "拖动文件到此或点击上传",
        sending: function (file, xhr, formData) {
            if (xhr.status !== 200) {
                console.log('fail???');
            }
        },
        accept: function (file, done) {
            done();
        },
        success: function (file, result) {
            console.log(result);
            layer.msg(result.msg,{
                icon: result.code ? 1 : 2
            });
        }
    };
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
