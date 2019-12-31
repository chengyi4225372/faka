<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:105:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\index\buy.html";i:1577757984;s:97:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\head.html";i:1576907381;s:97:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\foot.html";i:1566971633;}*/ ?>

<!DOCTYPE html> 

<html> 

    <head> 

        <meta charset="utf-8" /> 

        <title><?php echo $config['title']; ?></title>

        <meta name="keywords" content="<?php echo $config['keywords']; ?>" />

        <meta name="description" content="<?php echo $config['miao']; ?>" />
        <link rel="shortcut icon" href="<?php echo $config['logo']; ?>" />

        <script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
        <link href="/index/sink/css/css7.css" rel="stylesheet" type="text/css" />
        <link href="/index/sink/css/zzsc.css" rel="stylesheet" type="text/css" />
        <link href="/index/sink/css/buttons.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/index/sink/js/Validform_v5.3.2_min.js"></script>
        <script type="text/javascript" src="/index/sink/js/layer/layer.js"></script>

        <style type="text/css">
            .info.denglu {
                line-height: 55px;
            }
            #head .top .logo_img {
                float: left;
                height: 80px;
                width: 400px;
                margin-top: 10px;
            }
            .dh {
                border-top: 3px solid #00A2CA;
                border-bottom: 5px solid #017390;
                background: #00A2CA;
            }
            ul#nav {
                background: #00A2CA;
            }
            .a2 {
                background: #017390;
            }
            ul#nav li a:hover {
                background: #017390;
            }
        </style>
    </head> 

    <body> 

        <div id="head">

            <div class="top">
                <div class="logo_img"><a href="/"><img src="<?php echo $config['images']; ?>" width="400" height="80"></a></div>
                    <?php if(empty(\think\Session::get('info')) || ((\think\Session::get('info') instanceof \think\Collection || \think\Session::get('info') instanceof \think\Paginator ) && \think\Session::get('info')->isEmpty())): ?>
                    <div class="info denglu">
                    <a class="button button-3d button-primary button-small" href="<?php echo url('login/login'); ?>">登陆</a>
                    <a class="button button-3d button-caution button-small" href="<?php echo url('login/reg'); ?>"><i class="fa fa-tag"></i>注册</a>&nbsp;&nbsp;
                    </div>
                    <?php else: ?>
                    <div class="info">

                        <span class="welcome">亲爱的：<?php echo \think\Session::get('info')['account']; ?><span class="lv"><b> </b></span>欢迎您！&nbsp;<span></span><br>

                            <a href="<?php echo url('user/index'); ?>" class="button button-primary button-rounded button-small">会员中心</a>
                            <a href="<?php echo url('login/lout'); ?>" class="button button-giant button-rounded button-small" onclick="return confirm('确定要退出吗？')">安全退出</a>

                        </span>
                    </div>
                    <?php endif; ?>
                
            </div>
            <div class="dh">
    <!-- todo 点击的时候就有class  -->
                <ul id="nav"> 
                    <li><a      href="/">商品首页</a></li>
                    <li><a      href="<?php echo url('index/search'); ?>">游客订单查询</a></li>
                    <li><a      href="<?php echo url('configcom/address'); ?>">兑换地址</a></li>
                    <li><a      href="<?php echo url('configcom/about'); ?>">关于我们</a></li>
                    <li><a      href="<?php echo url('configcom/help'); ?>">帮助中心？</a></li>
                </ul>

            </div>
        </div>
        <br/>



<style>


    .payment-icon-list ul, .payment-list ul {
        padding: 1px 0;
    }



    .payment-icon-list li.curr:after, .payment-list li.curr:after {
        content: '';
        position: absolute;
        width: 17px;
        height: 17px;
        background-image: url(sink/cssimg/zf.png);
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
<br/>
<div class="topliucheng"><img src="/index/sink/img/goumaizn03.png" title=""></div>
<div id="dingdanqueren">
    <div class="dingdantitle" style="text-align: center; font-family: '微软雅黑'; font-size: 24px; color: #090;">订单生成成功，请完成支付！</div>
    <div class="reg">


        <div class="wu"></div>
        <div class="from">
            <div class="from_wz_3">
                <font color="#363636"  size="3">商品订单：</font></div>
            <div class="from_in_7 order"><font color="#363636"  size="3"><?php echo $order['order_no']; ?></font>
            </div>
        </div>

        <div class="from">
            <div class="from_wz_3"><font color="#363636"  size="3">所购商品：</font></div>
            <div class="from_in_7 paynames"><?php echo $goods[$order['gid']]; ?><a href="<?php echo url('index/trade',array('id'=>$order['id'])); ?>" target="_blank"></a>
            </div>
        </div>
        <div class="from">
            <div class="from_wz_3"><font color="#363636"  size="3">商品单价：</font></div><div class="from_in_5"><font color="#363636"  size="3"><?php echo $order['danpay']; ?>元 (单价)</font></div>
        </div>
        <div class="from">
            <div class="from_wz_3"><font color="#363636"  size="3">购买数量：</font></div><div class="from_in_5"><font color="#363636"  size="3"><?php echo $order['num']; ?>个</font> <font color="#2bb800"  size="2">
            <?php if($order['huo'] == '0'): ?>自动发货 <?php else: ?> 人工发货<?php endif; ?></font></div>
        </div>
        <div class="from">
            <div class="from_wz_3">
                <font color="#363636"  size="3">订单总价：</font></div>
            <div class="from_in_5 countpay"><font color="#FF0000"  size="3"><?php echo floatval($order['countpay']); ?><b>元</b>
            </font> &nbsp;&nbsp;
            <font color="#ee6500"  size="2">可用余额:**元</font> 【<a href="<?php echo url('user/index'); ?>">充值余额</a>】
        </div>
        </div>
        <div class="from">
            <div class="from_wz_3"><font color="#363636"  size="3">备注信息：</font></div>
            <div class="from_in_5">
                <font color="#2bb800"  size="2">
                 <?php if($order['huo'] == 1): ?>
                    <?php echo $order['content']; else: ?>
                    电话：<?php echo $order['mobile']; endif; ?>
                </font>
            </div>
        </div>

        <div class="from">
            <div class="from_wz_3"><font color="#363636"  size="3">支付方式：</font></div>
            <div class="">
                <div class="payment-list">
                    <ul>
                        <?php if(!(empty(\think\Session::get('info')) || ((\think\Session::get('info') instanceof \think\Collection || \think\Session::get('info') instanceof \think\Paginator ) && \think\Session::get('info')->isEmpty()))): ?>
                        <li class="yu" data-paytype="yupay" ><i class="payment-icon-yu">余额支付</i></li>
                        <?php endif; ?>

                        <li class="tenpay" data-paytype="alipay" ><i class="payment-icon-cft">支付宝支付</i></li>

                        <li class="wx " data-paytype="wxpay" onclick="payment($(this).attr('data-paytype'))"><i class="payment-icon-wx">微信支付</i></li>

                        <li class="qq" data-paytype="qqpay" onclick="payment($(this).attr('data-paytype'))"><i class="payment-icon-qq">QQ支付</i></li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            $(".payment-list ul li").click(function() {
                $(this).parent().find('li').removeClass('curr');
                $(this).addClass('curr');
                var n = $(this).index();
                $("#payid").find("option").eq(n).attr("selected", true)
            })

        </script>
        <div class="from">

            <div class="from_wz_3">&nbsp;</div>
            <div class="from_in_5" style="width:150px">
<!--                <form id="payform" method="post" action="/pay">-->
                    <input type="hidden" name="id" value="<?php echo $order['id']; ?> ">
                    <input type="hidden" id="payment" value="<?php echo $order['countpay']; ?>">
<!--                </form>-->
                <input type="button"  class="button button-3d button-primary button-rounded button-small kuan"  value="确认购买" />


            </div>
            <div class="from_in_2 yanzheng" style="width:100px">
                <a onClick="javascript :history.back(-1);" class="button button-3d button-highlight button-rounded button-small">返回</a>
            </div> </div>
        <div align="center">
            <font color="#FF0000"  size="2"> 付款后请不要关闭窗口，等网页转跳会自动转跳到卡密页面。</font><br/>
            <font color="#CC0099"  size="2">使用在线支付的用户，支付的过程中 有时候会多1分钱 二维码提示多少金额就必须付款多少，否则不能自动发货。</font></br><font color="#0000FF"  size="2">长期购买的客户建议充值到余额进行消费，发货速度更快。</font> </div>
    </div>

</div>
<script>

   $('.kuan').click(function(){
      var  types = $('ul li.curr').attr('data-paytype'); //支付类型
      var  goodnames = $.trim($('.paynames').text());//商品名称
      var  order_no  = $.trim($('.order').text());//商户订单号
      var  paynum    = $('#payment').val(); //商品总价
      var  sitename  = '栗子发卡网';

      var  url = "<?php echo url('pays/index'); ?>";

      if(types == '' || types== undefined || types == 'undefined'){
          layer.msg('请选择支付类型');
          return false;
      }

       if(types == 'yupay'){
           //余额支付
          var urls = "<?php echo url('index/yupay'); ?>"; 
          $.post(urls,{'order':order_no},function(ret){
                   if(ret.code== 2000){

                       if(ret.huo ==0){
                         layer.msg(ret.msg,{icon:6},function(){
                         parent.location.href="<?php echo url('index/zdfahuo'); ?>?orderno"+ret.order;
                          });
                       }else {
                          layer.msg(ret.msg,{icon:6},function(){
                         parent.location.href="<?php echo url('index/sdfahuo'); ?>?orderno"+ret.order;
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
   })

</script>
<div id="footer"><div>
    <a><?php echo $config['info']; ?></a>
</div></p><br/>
</div>

<script type="text/javascript">
    function htmlmsg(a, b) {
        layer.open({
            title: a,
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['410px', '170px'], //宽高
            content: '<div style="font-size: 12px;color: #f17100;margin:5px;border:5px;padding:5px;"> ' + b + ' </div>'
        });
    }

    function htmlmsg2(a, b) {
        layer.open({
            title: a,
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['390px', '180px'], //宽高
            content: '<div align=center><br/>点击下方的按钮进行查阅<br/><br/><a class="button button-3d button-primary button-rounded button-small" href="/Home/User/down/lb/2/id/' + b + '" target="_blank">查看卡密</a> <a class="button button-3d button-highlight button-rounded button-small" href="/Home/User/down/lb/1/id/' + b + '">下载保存</a> </div>'
        });
    }
</script>
</body> 

</html> 