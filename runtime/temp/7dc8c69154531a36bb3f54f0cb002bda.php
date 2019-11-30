<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:105:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\two\trade.html";i:1571197156;s:102:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\twombhead.html";i:1571190314;s:102:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\twombfoot.html";i:1571190465;}*/ ?>

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



    <div class="am-panel am-panel-default" style="margin:5px 0 5px 0;border-radius: 0px">
        <div class="am-panel-bd liebiaocatname">
          <?php echo $content['content']; ?>
        </div>
    </div>
    <script>
        $(function() {
            if ($("#kucun").val() == 0) {
                $("#paysubmit").attr("class", 'am-btn am-btn-danger am-btn-xl am-disabled');
                $("#paysubmit").attr("disabled", true);
                $("#paysubmit").html("库存不足");
            }
        });
    </script>
    <div class="good-trade">

        <div class="am-container" style="">
            <div class="am-g ">

                <div class="am-u-sm-12 am-u-md-5 am-u-lg-5 trade-goodimg am-u-end" style="padding: 0px;text-align: center">

                    <img src="<?php echo $info['images']; ?>" alt="">

                </div>
                <div class="am-u-sm-12 am-u-md-7 am-u-lg-7  am-u-end" style="">
                    <!-- 网格开始 -->

                    <h2 style="margin-top: 0px;color: #333;font-family: 微软雅黑;" class="am-text-truncate"><?php echo (isset($info['title']) && ($info['title'] !== '')?$info['title']:''); ?></h2>
                    <p class="trade-goodinfo" style="background-color:#f5f3ef;margin-top: 20px">
                        <span style="color:#6c6c6c">促销：</span>
                        <span class="trade-price">￥<?php echo $info['money']; ?> </span>
                        <span style="float:right">
                                        <span style="color: #6C6C6C;">累积销量：</span>
                                        <span style="color:#6c6c6c;font-size:18px;"><?php echo (isset($info['paynum']) && ($info['paynum'] !== '')?$info['paynum']:'0'); ?></span>
                                    </span><br>
                        <?php if($info['huo'] == '0'): ?>
                        <span style="color:#6C6C6C">库存：<?php echo $info['num']; ?>件</span>
                        <?php endif; ?>
                        <a id="lookpf" style="margin-left:5px;font-size:10px" href="javascript:;" onclick="lookpf()">查看批发价</a>
                        <?php if($info['huo'] == '0'): ?>
                        <br><span style="color:#6c6c6c;">服务：自动发货 无忧售后</span>
                        <?php else: ?>
                        <br><span style="color:#6c6c6c;">服务：手工发货</span>
                        <?php endif; ?>
                    </p>
                    <script>
                        function lookpf() {
                            layer.tips('满10件0.10元/件', '#lookpf', {
                                tips: [3, '#78BA32']
                            });
                        }

                    </script>
                    <form action="/buy" id="p_form" method="post" onsubmit="return false;">
                        <input type="hidden" name="gid" value="23">
                        <div class="from">
                                    <span style="color:#6c6c6c;margin-left:10px">联系方式：
                                        <input id="mobile" name="mobile"
                                               style="padding: 0.5em;font-size: 1rem;line-height: 1.2;color: #333;"
                                               placeholder="请输入联系方式" required="">
                                    </span>
                        </div>
                        <br>
                        <span style="color:#6c6c6c;margin-left:10px">数量：
                                    <input type="button" value="+" style="margin-right:-6px;" class="trade-input-count-button" onclick="countoper('jia')">
                                    <input type="text" class="trade-input-count" id="p_num" name="num" value="1" placeholder="请输入购买数量" required="" min="1" max="9999">
                                    <input type="button" value="-" style="margin-left:-6px;" class="trade-input-count-button" onclick="countoper('jian')">
                                </span>
                    </form>
                    <input id="minnum" name="minnum" type="hidden" value="1">
                    <input id="maxnum" name="maxnum" type="hidden" value="9999">
                    <input id="beishu" name="beishu" type="hidden" value="1">
                    <br>
                    <button type="submit" onclick="buy(0,1)" class="am-btn am-btn-danger am-btn-xl am-square" id="paysubmit" style="margin-top:20px"><span class="am-icon-shopping-cart"></span>立即购买</button>


                    <!-- 网格结束 -->
                </div>
            </div>
        </div>



        <div class="am-panel am-panel-default" style="border-radius:0px;margin-top: 10px">
            <div class="am-panel-hd">商品描述</div>
            <div class="am-panel-bd">
               <?php echo (isset($info['content']) && ($info['content'] !== '')?$info['content']:''); ?>
            </div>
        </div>
    </div>

            <div class="tongji"><?php echo (isset($config['info']) && ($config['info'] !== '')?$config['info']:''); ?></div>
            <form action="/search" method="post" class="am-modal am-modal-alert" tabindex="-1" id="my-alerts">
                <div class="am-modal-dialog">
                  <div class="am-modal-hd">订单查询</div>
                  <div class="am-modal-bd">
                    请输入订单号或联系方式
                      <input type="text" class="am-modal-prompt-input" name="content" required>
                  </div>
                  <div class="am-modal-footer">
                    <button type="submit" class="am-btn am-btn-primary" >确定</button>
                  </div>
                </div>
     
            </form>

<script type="text/javascript" src="/static/index/sink/js/jquery-1.8.3.min.js"></script>
<script src="/static/index/sink/js/layer/layer.js"></script>


<script>
        function countoper(oper){
            count=$("#p_num").val();
            if(oper=='jia'){
                count=parseInt(count)+1;
            }else{
                count=parseInt(count)-1;
            }
            if(parseInt(count)<0){
                count=0;
            }
            $("#p_num").val(count);
        }

    </script>

<script>
        function buy(a,b) {
            var p_num = document.getElementById("p_num").value;
            var minnum = document.getElementById("minnum").value;
            var maxnum = document.getElementById("maxnum").value;
            var beishu = document.getElementById("beishu").value;
            if (p_num < minnum){
                layer.alert('最小购买数是'+minnum);
                document.getElementById("p_num").value = minnum;
                return false;
            }
            if (p_num > maxnum){
                layer.alert('最大购买数是'+maxnum);
                document.getElementById("p_num").value = maxnum;
                return false;
            }
            if(b == 2){
                $.ajax({
                    //几个参数需要注意一下
                    type: "POST", //方法类型
                    dataType: "json", //预期服务器返回的数据类型
                    url: "/ajaxbuy", //url
                    data: $('#p_form').serialize(),
                    success: function(result) {
                        if (result.status == 1) {
                            layer.msg(result.msg, function() {
                                window.location.href = "/buy?gid="+result.gid+"&order_no="+result.order_no;
                            });
                        } else {
                            layer.msg(result.msg);
                        }
                        ;
                    },
                });
                return false;
            }
            if (a >= (parseInt(p_num)*parseInt(beishu))) {
                $.ajax({
                    //几个参数需要注意一下
                    type: "POST", //方法类型
                    dataType: "json", //预期服务器返回的数据类型
                    url: "/ajaxbuy", //url
                    data: $('#p_form').serialize(),
                    success: function(result) {
                        if (result.status == 1) {
                            layer.msg(result.msg, function() {
                                window.location.href = "/buy?gid="+result.gid+"&order_no="+result.order_no;
                            });
                        } else {
                            layer.msg(result.msg);
                        }
                        ;
                    },
                });
            } else {
                layer.alert('库存不足！');
            }
        }
    </script>

</div>



