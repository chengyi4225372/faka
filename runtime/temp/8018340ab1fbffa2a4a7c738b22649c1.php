<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:106:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\two\search.html";i:1577926366;s:102:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\twombhead.html";i:1571190314;s:102:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\twombfoot.html";i:1577263336;}*/ ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $config['title']; ?></title>
        <meta name="keywords" content="<?php echo $config['keywords']; ?>" />

        <meta name="description" content="<?php echo $config['miao']; ?>" />
        <link rel="shortcut icon" href="<?php echo $config['logo']; ?>" />

        <link rel="stylesheet" href="/twomb/css/amazeui.css" >
        <script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
        <script src='/index/sink/js/layer/layer.js'></script>
        <script src="/twomb/js/amazeui.min.js"></script>
        <script type="text/javascript" src="/twomb/js/font_486278_cz1h5tt67nt.js"></script>
        <link rel="stylesheet" href="/twomb/css/style.css" >
        <style type="text/css">

            .am-container{max-width:1200px}
            .am-topbar .am-text-ir {display: block;margin-right: 10px;height: 60px;width: 130px;background: url("<?php echo $config['images']; ?>") no-repeat left center;-webkit-background-size: 125px 24px;background-size: 125px 24px;}
            /* 色调设置 */
            .am-topbar-inverse{background-color:#00A2CA}
            .thhead{background-color:#e1e1e1;color:#AAEDFE}
            .liebiaocatname{background-color:#f0f0f0;color:#707070}
            .wapcatname{background-color:#f0f0f0;color:#a70000}
            /* 色调设置 */
            .index_good_body:hover{box-shadow:0 15px 35px rgba(0,0,0,.2);z-index:2}

        </style>
    </head>
    <body>
 <header class="am-topbar am-topbar-inverse am-topbar-fixed-top">
            <div class="am-container"> 
                <h1 class="am-topbar-brand" style="margin:0 10px 0 0;">
                    <a href="/" class="am-text-ir" style="background-size: 130px 40px;"></a>
                </h1>
                <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse-2'}">
                    <span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
                <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse-2"> 
                    <ul class="am-nav am-nav-pills am-topbar-nav"> 
                        <li><a href="/"><span class="am-icon-home am-icon-sm"></span>首页</a></li> 
                        <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $config['kefu']; ?>&amp;site=qq&amp;menu=yes" target="_blank"><i class="am-icon-qq am-icon-fw"></i>客服</a></li>
                        <li><a href="<?php echo url('two/help'); ?>"><span class="am-icon-list-alt"></span>帮助</a></li>
                    </ul> 
                    <div class="am-topbar-right"> 
                        <ul class="am-nav am-nav-pills am-topbar-nav"> 
                            <li><a href="<?php echo url('login/login'); ?>"><span class="am-icon-users"></span>会员中心</a></li>
                            <li>
                                <a href="javascript: void(0)" data-am-modal="{target: '#my-alerts'}"><span class="am-icon-search"></span>订单查询</a>
                            </li>
                        </ul> 
                    </div> 
                </div> 
            </div> 
        </header>
        <div class="am-container" style="padding:2px">

            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$orders): $mod = ($i % 2 );++$i;?>
            <section class="am-panel" style="margin-top:5px;margin-bottom: 5px;border: #ccc 1px solid">
                <header class="am-topbar-inverse" style="padding:15px;color:#">
                    <h3 class="am-panel-title" style="text-align:center">订单信息</h3>
                </header>
                <div class="am-panel-bd">
                    <ul class="am-list am-list-static" >
                        <li class="am-text-truncate">订单编号：<?php echo $orders['order_no']; ?></li>
                        <li class="am-text-truncate">商品名称：<?php echo $goods[$orders['gid']]; ?></li>
                        <li>下单时间：<?php echo $orders['create_time']; ?></li>
                        <li>支付价格：￥<?php echo floatval($orders['countpay']); ?></li>
                        <li>购买数量：<?php echo $orders['num']; ?>件</li>
                        <li>发货方式：<?php if($orders['huo'] == 0): ?> 自动发货<?php else: ?>手动发货<?php endif; ?></li>
                        <li>发卡状态：
                            <?php if($orders['status'] >= 1): ?>
                              已发货
                            <?php else: ?>
                             未发货
                            <?php endif; ?>
                        </li>
<!--                        <li>支付方式：微信支付</li>-->
                        <li>订单状态：
                        <?php if($orders['status'] >= 1): ?>
                        <font style="cursor:pointer;" color="#ff4351">已付款</font>
                        <?php else: ?>
                        <font style="cursor:pointer" color="#CCCCCC" >未付款</font>
                        <?php endif; ?>
                        </li>
                        <?php if($orders['huo'] == 1): ?>
                        <li>订单回执信息：
                            <?php echo $orders['orderback']; ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </section>
            <script src="/static/twomb/js/clipboard.min.js"></script>
            <?php if($orders['huo'] == 0): ?>
            <section class="am-panel" style="margin-top:5px;margin-bottom: 5px;border: #ccc 1px solid;">
                <header class="am-topbar-inverse" style="padding:15px;color:#3c3c3c">
                    <h3 class="am-panel-title" style="text-align:center;color: #fff">
                        卡密信息
                    </h3>
                </header>

                <div class="am-panel-bd" style="font-weight:bold;" id="target">
                    <?php if(is_array($orders['cardlist']) || $orders['cardlist'] instanceof \think\Collection || $orders['cardlist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $orders['cardlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$card): $mod = ($i % 2 );++$i;?>
                    <?php echo $card['kami']; ?><br>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <br>
                </div>
                <div style="text-align:right;padding: 10px"><a class="am-btn am-topbar-inverse" style="color:#fff" href="<?php echo url('two/daochu'); ?>?orderno=<?php echo $orders['order_no']; ?>" target="_blank">导出</a>
                    <button class="am-btn am-topbar-inverse" data-clipboard-action="copy" data-clipboard-target="#target" id="copy_btn">
                        复制
                    </button>
                </div>
            </section>
            <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
            <script>
                $(document).ready(function() {
                    var clipboard = new Clipboard('#copy_btn');
                    clipboard.on('success', function(e) {
                        //layer.msg('复制成功');

                        e.clearSelection();
                        console.log(e.clearSelection);
                    });
                    $("#copy_btn").click(function() {
                        layer.msg('复制成功');
                    });
                });


                function editaccount(orderid) {
                    layer.open({
                        type: 2,
                        title: '修改代充账号信息',
                        shadeClose: true,
                        shade: 0.8,
                        area: ['380px', '50%'],
                        content: '/index/EditAccount.html' + '?OrderId=' + orderid //iframe的url
                    });
                }
            </script> 
       <center>            <div class="tongji"><?php echo (isset($config['info']) && ($config['info'] !== '')?$config['info']:''); ?></div>
            <form action="<?php echo url('two/search'); ?>" method="get" class="am-modal am-modal-alert" tabindex="-1" id="my-alerts">
                <div class="am-modal-dialog">
                  <div class="am-modal-hd">订单查询</div>
                  <div class="am-modal-bd">
                    请输入订单号或联系方式
                      <input type="text" class="am-modal-prompt-input" name="orderno" required>
                  </div>
                  <div class="am-modal-footer">
                    <button type="submit" class="am-btn am-btn-primary" >确定</button>
                  </div>
                </div>
     
            </form></center>
        </div>

    </body>
</html> 