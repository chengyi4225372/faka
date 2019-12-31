<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\two\buy.html";i:1577814703;s:80:"C:\Users\Administrator\Desktop\faka\application\index\view\public\twombhead.html";i:1577542709;s:80:"C:\Users\Administrator\Desktop\faka\application\index\view\public\twombfoot.html";i:1577542709;}*/ ?>

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
    <style>


        .payment-icon-list ul, .payment-list ul {
            padding: 1px 0;
        }



        .payment-icon-list li.curr:after, .payment-list li.curr:after {
            content: '';
            position: absolute;
            width: 17px;
            height: 17px;
            background-image: url(/index/sink/cssimg/zf.png);
            bottom: 0;
            right: 0;
            background-position: 17px -119px;
        }
        .payment-list li {
            padding: 3px 3px;
            font-size: 14px;
            border: 1px solid #b4b7bf;
            border-radius: 3px;
            display: inline-block;
            position: relative;
            cursor: pointer;
            margin-right: 5px;
        }
        .payment-icon-list li.curr, .payment-list li.curr {
            border: 1px solid #0071ce;
            border: 1px solid #db5b5a;
            color: #0071ce;

        }
        .payment-icon-list li i, .payment-list li i {
            text-indent: -10000px;
            overflow: hidden;
            outline: 0;
        }
        .payment-icon-cft {
            background-image: url(/index/sink/cssimg/alipaym.png);
            background-position: 0px -76px;
        }
        .payment-icon-wx {
            background-image: url(/index/sink/cssimg/wxpaym.png);
            background-position: 0px -75px;
        }
        .payment-icon-qq {
            background-image: url(/index/sink/cssimg/qqpaym.png);
            background-position: 0px 69px;
        }

        .payment-icon-yu {
            background-image: url(/index/sink/cssimg/yuem.png);
            background-position: 0px 70px;
        }

        .payment-icon-cft, .payment-icon-yu, .payment-icon-ms, .payment-icon-qq, .payment-icon-vs, .payment-icon-wx {
            display: inline-block;
            vertical-align: top;
            width: 99px;
            height: 30px;
        }

        em, i {
            font-style: normal;
            font-weight: 400;
        }


    </style>
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">确认订单信息</div>
        <div class="am-panel-bd">
            <ul class="am-list am-list-static">
                <li >订单编号：<?php echo $order['order_no']; ?></li>
                <li class="am-text-truncate paynames" data-title="<?php echo $goods[$order['gid']]; ?>">商品名称：<?php echo $goods[$order['gid']]; ?></li>
                <li>商品单价：<?php echo floatval($order['danpay']); ?>元/件</li>
                <li>购买数量：<?php echo $order['num']; ?>件</li>
                <li >订单信息：<?php if($order['huo'] == '0'): ?>联系电话：<?php echo $order['mobile']; else: ?><?php echo $order['content']; endif; ?></li>
                <li>发货类型：
                    <?php if($order['huo'] == '0'): ?>
                    自动发货
                    <?php else: ?>
                    人工发货
                    <?php endif; ?>
                </li>
                <li>订单总价：<?php echo floatval($order['countpay']); ?>元 </li>
            </ul>
            <span style="color:red">温馨提示：请将联系方式写复杂一点,以免有人偷卡</span>
        </div>
    </div>

    <div class="from">
        <div class="from_wz_3"><font color="#363636" size="3">支付方式：</font></div>
        <div class="am-g">
            <div class="payment-list">
                <ul>
                    <?php if(!(empty(\think\Session::get('info')) || ((\think\Session::get('info') instanceof \think\Collection || \think\Session::get('info') instanceof \think\Paginator ) && \think\Session::get('info')->isEmpty()))): ?>
                    <li class="yu" data-paytype="yupay" ><i class="payment-icon-yu"></i></li>
                    <?php endif; ?>
                    <li class="tenpay" data-paytype="alipay"><i class="payment-icon-cft">支付宝支付</i></li>
                    <li class="wx " data-paytype="wx" ><i class="payment-icon-wx">微信支付</i></li>
                    <li class="qq" data-paytype="qq" ><i class="payment-icon-qq">QQ支付</i></li>
                </ul>
            </div>
        </div>
    </div>

   <!--
    <div class="am-form-group">
        <h3>选择支付方式</h3>
        <div class="am-container">
            <div class="am-g">

                <div class="text-area-star" style="float:left">
                    <div class="am-u-sm-12 am-u-md-2 am-u-lg-2 am-u-end" style="padding:5px">
                        <label style="padding:5px">
                            <a class="yu" data-paytype="yu" ><i class="payment-icon-yu"></i></a>
                        </label>
                    </div>
                </div>

                <div class="text-area-star" style="float:left">
                    <div class="am-u-sm-12 am-u-md-2 am-u-lg-2 am-u-end" style="padding:5px">

                        <label style="padding:5px">
                            <a class="yu" data-paytype="alipay" ><i class="payment-icon-cft"></i></a>
                        </label>
                    </div>
                </div>

                <div class="text-area-star" style="float:left">
                    <div class="am-u-sm-12 am-u-md-2 am-u-lg-2 am-u-end" style="padding:5px">
                        <label style="padding:5px">
                            <a class="yu" data-paytype="wxpay" ><i class="payment-icon-wx"></i></a>
                        </label>
                    </div>
                </div>

                <div class="text-area-star" style="float:left">
                    <div class="am-u-sm-12 am-u-md-2 am-u-lg-2 am-u-end" style="padding:5px">
                        <label style="padding:5px">
                            <a class="yu" data-paytype="qqpay" ><i class="payment-icon-qq"></i></a>
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>
    -->
    <hr>

    <!--<form id="payform" method="post" action="/pay">-->
        <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
        <input type="hidden" id="payment" value="<?php echo $order['countpay']; ?>">
        <input type="hidden" id="order" value="<?php echo $order['order_no']; ?>">
    <!--</form>-->

    <div style=" text-align: right;">
        <button type="submit" onclick="mobilePay()" class="am-btn am-btn-danger am-btn-xl" style="width: 100%">立即付款</button>
    </div>
    <script>
        /*
        function payment(id){
            $("#payment").val(id);
            if(id == 1){
                layer.msg('支付宝支付');
            }
            if(id == 2){
                layer.msg('微信支付');
            }
            if(id == 3){
                layer.msg('qq支付');
            }
            if(id == 4){
                layer.msg('余额支付');
            }
        }
        */

        $(".payment-list ul li").click(function() {
            $(this).parent().find('li').removeClass('curr');
            $(this).addClass('curr');
            var n = $(this).index();
            $("#payid").find("option").eq(n).attr("selected", true)
        })


        /** 支付 **/
        function mobilePay(){
            var  types = $('ul li.curr').attr('data-paytype');//支付类型
            var  goodnames = $('.paynames').attr('data-title');//商品名称
            var  order_no  = $('#order').val();//商户订单号
            var  paynum    = $('#payment').val(); //商品总价
            var  sitename  = '栗子发卡网';
            var  url = "<?php echo url('@index/pays/index'); ?>";


            if(types == '' || types == undefined || types =='undefined'){
                layer.msg('请选择支付类型');
                return false;
            }

            if(paynum == '' || paynum == undefined || paynum == 'undefined'){
                return false;
            }

            if(types == 'yupay'){
                //余额支付
                var urls = "<?php echo url('two/yupay'); ?>";
                $.post(urls,{'order':order_no},function(ret){
                    if(ret.code== 2000){

                        if(ret.huo ==0){
                            layer.msg(ret.msg,{icon:6},function(){
                                parent.location.href="<?php echo url('two/zdfahuo'); ?>?orderno="+ret.order;
                            });
                        }else {
                            layer.msg(ret.msg,{icon:6},function(){
                                parent.location.href="<?php echo url('two/sdfahuo'); ?>?orderno="+ret.order;
                            });
                        }

                    }

                    if(ret.code== 4001){
                        layer.msg(ret.msg,{icon:5},function(){
                            parent.location.reload();
                        })
                    }

                    if(ret.code== 4002){
                        layer.msg(ret.msg,{icon:5},function(){
                            parent.location.reload();
                        })
                    }


                    if(ret.code== 4003){
                        layer.msg(ret.msg,{icon:5},function(){
                            parent.location.reload();
                        })
                    }


                    if(ret.code== 4004){
                        layer.msg(ret.msg,{icon:5},function(){
                            parent.location.reload();
                        })
                    }


                    if(ret.code== 4005){
                        layer.msg(ret.msg,{icon:5},function(){
                            parent.location.reload();
                        })
                    }


                    if(ret.code== 4006){
                        layer.msg(ret.msg,{icon:5},function(){
                            parent.location.reload();
                        })
                    }

                },'json')
            }else {
                window.location.href=url+"?types="+types+"&goodnames="+goodnames+"&order_no="+order_no+"&paynum="+paynum+"&sitename="+sitename;
            }
        }

    </script>

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