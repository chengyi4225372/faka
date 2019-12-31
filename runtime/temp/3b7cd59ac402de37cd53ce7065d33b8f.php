<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\two\index.html";i:1577801561;s:80:"C:\Users\Administrator\Desktop\faka\application\index\view\public\twombhead.html";i:1577542709;s:80:"C:\Users\Administrator\Desktop\faka\application\index\view\public\twombfoot.html";i:1577542709;}*/ ?>

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

    <div class="am-show-portrait">
        <ul class="am-avg-sm-4 am-avg-md-4 am-avg-lg-4 am-thumbnails" style="text-align:center;margin-top: 10px;">
            <li><a href="javascript: void(0)" data-am-modal="{target: '#my-alerts'}">
                <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-xingzhuanggongnengtubiao-"></use>
            </svg><br>订单查询</a></li>
            <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=26591626&amp;site=qq&amp;menu=yes"><svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-icon_kefu"></use>
            </svg><br>联系客服</a></li>
            <li><a href="<?php echo url('login/login'); ?>"><svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-filedicon_memberco"></use>
            </svg><br>会员中心</a></li>
            <li><a href="<?php echo url('two/help'); ?>"><svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-bangzhuyufankui"></use>
            </svg><br>帮助中心</a></li>
        </ul>
    </div>
    <div class="am-panel am-panel-default" style="margin:5px 0 5px 0;border-radius: 0px">
        <div class="am-panel-bd liebiaocatname">
            <p><?php echo htmlspecialchars_decode($indexs['content']); ?></p>
        </div>
    </div>
    <div class="goods">
        <div class="am-show-landscape">
            <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 am-thumbnails">
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['huo'] == '0'): ?>
                <li><a  data-href="<?php echo url('two/trade',array('id'=>$vo['id'])); ?>" data-num="<?php if(isset($vo['num'])): ?><?php echo $vo['num']; else: ?>0<?php endif; ?>" onclick="checknum(this)">
                    <div style="background-color: #fff;" class="index_good_body">
                        <img class="" src="<?php echo (isset($vo['images']) && ($vo['images'] !== '')?$vo['images']:''); ?>" style="width:100%;height:280px">
                        <div class="pr-info" style="padding:5px">
                            <span class="price">￥<?php echo (isset($vo['money']) && ($vo['money'] !== '')?$vo['money']:''); ?></span>

                            <span class="pr-xl am-badge am-badge-danger" style="color:#fff">库存<?php if(isset($vo['num'])): ?><?php echo $vo['num']; else: ?>0<?php endif; ?></span>

                            <div class="index-goodname-xq" style="height:45px;color:#333">
                                <p title="<?php echo $vo['title']; ?>"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></p>
                            </div>
                        </div>
                    </div>
                </a></li>
                <?php else: ?>
                <li><a href="<?php echo url('two/trade',array('id'=>$vo['id'])); ?>">
                    <div style="background-color: #fff;" class="index_good_body">
                        <img class="" src="<?php echo $vo['images']; ?>" style="width:100%;height:280px">
                        <div class="pr-info" style="padding:5px">
                            <span class="price">￥<?php echo (isset($vo['money']) && ($vo['money'] !== '')?$vo['money']:''); ?></span>
                            <span class="pr-xl am-badge am-badge-success" style="color:#fff">代充商品</span>

                            <div class="index-goodname-xq" style="height:45px;color:#333">
                                <p title="<?php echo $vo['title']; ?>"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></p>
                            </div>
                        </div>
                    </div>
                </a></li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>

    </div>
    <!--            <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-6 am-thumbnails" style="margin-top:10px">

                    <li><a type="button" class="am-btn am-btn-success am-btn-hollow am-square" style="width:100%;color:#000" href="" target="_blank"></a></li>

                    <li><a type="button" class="am-btn am-btn-success am-btn-hollow am-square" style="width:100%;color:#000" href="" target="_blank"></a></li>
                </ul>     -->

                <div class="tongji"><?php echo (isset($config['info']) && ($config['info'] !== '')?$config['info']:''); ?></div>
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
     
            </form>
</div>
<script>
//kucun
function checknum(obj){
    var urls = $(obj).attr('data-href');
    var num  = $(obj).attr('data-num');

    if(urls =='' || urls == undefined){
        return false;
    } 

    if(num =='' || num ==0 || num == undefined || num == 'null'){
        layer.msg('该商品缺货，请勿购买',{icon:5});
        return false;
    } 

    window.location.href = urls;
}

</script>