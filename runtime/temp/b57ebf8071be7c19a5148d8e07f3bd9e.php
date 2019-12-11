<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"C:\Users\Administrator\Desktop\faka\public/../application/admin\view\goods\addg.html";i:1571549535;s:79:"C:\Users\Administrator\Desktop\faka\application\admin\view\template\layout.html";i:1567323883;}*/ ?>
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
                            <label for="title" class="col-sm-2 control-label">商品名称</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="title" name="title" value="<?php echo $info['title']; ?>" class="form-control" placeholder="商品名称">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label">商品排序</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="sort" name="sort" value="<?php echo (isset($info['sort']) && ($info['sort'] !== '')?$info['sort']:''); ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="level_id" class="col-sm-2 control-label">商品类型</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <select name="cid" id="cid" class="form-control">

                                        <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;if(isset($info['cid'])): ?>
                                        <option value="<?php echo $vv['id']; ?>" <?php if($info['cid'] == $vv['id']): ?> aria-selected="" -checked="" <?php endif; ?>><?php echo $vv['title']; ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo $vv['id']; ?>"><?php echo $vv['title']; ?></option>

                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="images" class="col-sm-2 control-label">商品图片</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group iconpicker-container">
                                    <input type="file" class="layui-btn" name="uploadImg" id="uploadImg" onchange="uploadImages();" />
                             <div class="timeline-body">

                              <img style="width:150px;height:100px;" src="<?php echo (isset($info['images']) && ($info['images'] !== '')?$info['images']:'http://placehold.it/150x100'); ?>" id="imgs" class="margin">

                               <input type="hidden" id="images" value="<?php echo $info['images']; ?>">
                             </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="huo" class="col-sm-2 control-label">发货类型</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group iconpicker-container">
                                    自动发货： <input type="radio" name="huo" onclick="show_moban();" <?php if($info['huo'] == '0'): ?> checked=""  <?php endif; ?>  value="0">
                                    人工发货： <input type="radio" name="huo" onclick="show_moban();" <?php if($info['huo'] == '1'): ?> checked=""  <?php endif; ?> value="1">
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="moban" style="display:<?php if($info['huo'] == '0'): ?> none<?php else: ?> block<?php endif; ?>;">
                            <label for="moban" class="col-sm-2 control-label">人工发货模板</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <select name="rengong" id="rengong" class="form-control">

                                        <?php if(is_array($moban) || $moban instanceof \think\Collection || $moban instanceof \think\Paginator): $i = 0; $__LIST__ = $moban;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mo): $mod = ($i % 2 );++$i;if($info['rengong'] != null): ?>
                                        <option value="<?php echo $mo['id']; ?>" <?php if($info['rengong'] == $mo['id']): ?> selected=""  <?php endif; ?>><?php echo $mo['title']; ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo $mo['id']; ?>"><?php echo $mo['title']; ?></option>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">商品价格</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="money" name="money" value="<?php echo $info['money']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="paynum" class="col-sm-2 control-label">商品销量</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="paynum" name="paynum" value="<?php echo $info['paynum']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">普通代理</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="nomal" name="nomal" value="<?php echo $info['nomal']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">高级代理</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="high" name="high" value="<?php echo $info['high']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">批发价格</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="pipay" name="pipay" value="<?php echo $info['pipay']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">批发数量</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="pinum" name="pinum" value="<?php echo $info['pinum']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">最多购买</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="maxs" name="maxs" value="<?php echo $info['maxs']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">最少购买</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="mins" name="mins" value="<?php echo $info['mins']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">发货倍数</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input  id="bei" name="bei" value="<?php echo $info['bei']; ?>" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="contents" class="col-sm-2 control-label">使用说明</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                <textarea type="text" name="content" id="editor" placeholder="商品描述"><?php echo htmlspecialchars_decode($info['content']); ?></textarea>

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



<script type="text/javascript" charset="utf-8" src="/static/admin/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/admin/plugins/ueditor/ueditor.all.js"> </script>
<script type="text/javascript" charset="utf-8" src="/static/admin/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<script>
    var url="<?php echo url('extend/ueserver'); ?>";
    //实例化编辑器
    var ue = UE.getEditor('editor',{
        serverUrl :url,
        initialFrameWidth:800,
        initialFrameHeight:400,
    });
</script>

<script>
    function uploadImages(){
        var formdata = new FormData();

        var url = "<?php echo url('goods/uploads_img'); ?>";
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
                            $("#imgs").attr('src',data.path);
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
    function show_moban(){
      var  vals = $("input[name='huo']:checked").val();

      if(vals == 1){
          $('#moban').show();
      }
      if(vals == 0 || vals == ''){
          $('#moban').hide();
      }
    }
</script>



<script>
    $('.addg').click(function(){
         var dat      = {};

         var url = "<?php echo url('goods/addg'); ?>";

         var ren = $("input[name='huo']:checked").val();

          if(ren == '' || ren == 0){
              dat.rengong  = '';
          }else {
              dat.rengong  = $("#rengong option:selected").val();
          }

         dat.title    = $('#title').val();
         dat.sort     = $('#sort').val();
         dat.images   = $('#images').val();
         dat.money    = $('#money').val();
         dat.content  = UE.getEditor('editor').getContent();
         dat.huo      = $("input[name='huo']:checked").val();
         dat.cid      = $('#cid option:selected').val();
         dat.id       = $('#id').val();
         dat.paynum   = $('#paynum').val();
         dat.nomal    = $('#nomal').val();
         dat.high     = $('#high').val();
         dat.pipay    = $('#pipay').val();
         dat.pinum    = $('#pinum').val();
         dat.maxs     = $('#maxs').val();
         dat.mins     = $('#mins').val();
         dat.bei      = $('#bei').val();

         if( dat.title=='' || dat.title ==undefined ){
              layer.msg('商品名称不能为空',{time:2000});
              return false;
         }

         if( dat.money=='' || dat.money ==undefined ){
                layer.msg('商品价格',{time:2000});
                return false;
            }

        if( dat.images =='' || dat.images == undefined){
            layer.msg('请上传图片',{time:2000});
            return false;
        }


        $.ajax({
            url:url,
            data:{dat:dat},
            type:'post',
            dataType:'json',
            success:function(ret){

                if(ret.code == 200){
                    layer.msg(ret.msg,{time:2000},function(){
                        parent.location.href="<?php echo url('goods/glist'); ?>";
                    })
                };
                if(ret.code == 400){
                    layer.msg(ret.msg,{time:2000},function(){
                        parent.location.reload();
                    })
                };
            },
            error:function(ret){
                console.log(ret);
            }
        });
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
