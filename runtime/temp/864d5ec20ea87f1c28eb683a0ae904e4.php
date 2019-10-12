<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:107:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\index\index.html";i:1567739563;s:97:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\head.html";i:1567136309;s:97:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\foot.html";i:1566971633;}*/ ?>

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
                    <li><a      href="<?php echo url('configcom/search'); ?>">游客订单查询</a></li>
                    <li><a      href="<?php echo url('configcom/address'); ?>">兑换地址</a></li>
                    <li><a      href="<?php echo url('configcom/about'); ?>">关于我们</a></li>
                    <li><a      href="<?php echo url('configcom/help'); ?>">帮助中心？</a></li>
                </ul>

            </div>
        </div>



        <br/>



<style>
    #bar .bar_top {
        background-color: #00A2CA;
        background: #00A2CA url(../sink/cssimg/dinggoubg.png) repeat-x;
    }
    .indexlistlb {
        background-color: #AAEDFE;

    }
</style>
<div class="topliucheng">
    <img src="/index/sink/img/goumaizn01.png" title="">
    <?php echo htmlspecialchars_decode($indexs['content']); ?>
    <div id="bd">

        <div id="bar">
            <div class="bar_top">商家信息</div>
            <div class="from_wz_41">
                <div class="kefu"><a target="blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $config['kefu']; ?>&amp;Site=添加客服QQ购买续费不迷路&amp;Menu=yes">QQ:<?php echo $config['kefu']; ?></a> </div>
                <div class="kefu">
                    QQ群：<?php echo $config['qq1']; ?></div>
                <div class="kefu">
                   微信：<?php echo $config['qq2']; ?></div>

            </div>

            <div class="bar_top">手机扫码购买</div><div class="erweima">
            <img src="<?php echo $config['qcode']; ?>"> </div>
        </div>


        <div id="bar_r">
            <div id="body_xiao">
                <table style="width:100%" border="0" cellpadding="10" cellspacing="0"  >

                    <tr >
                        <th class="indexlistlb">商品名称</th>
                        <th class="indexlistlb">单价</th>
                        <th class="indexlistlb">批发价</th>
                        <th class="indexlistlb">库存</th>
                        <th class="indexlistlb">操作</th>
                    </tr>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <th colspan="5" align="center" class="greencoler" >
                            <div align="center"><font size="3"><?php echo $categorys[$vo['cid']]; ?></font></div>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <div align="left">
                                <?php if($vo['huo'] == '0'): ?>
                                <a class="button button-action button-circle button-small" title="自动发货商品，购买后自动发货">自动</a>
                                <?php else: ?>
                                <a class="button button-highlight button-circle button-small" title="手动发货商品，购买后客服手动发货给你">手动</a>
                                <?php endif; ?>
                                <font size="3" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></font>
                            </div>
                        </td>
                        <td>
                            <font color="#FF5400"  size="2" title="会员单价"><?php echo $vo['money']; ?></font>
                            <br/>
                            <font color="#BBBBBB"  size="1" title="销量">销量:<?php echo $vo['paynum']; ?></font>
                        </td>
                        <td>
                            <font color="#0281D2"  size="2" title="批发单价"><?php echo $vo['pipay']; ?>元<br/></font>
     <font color="#BBBBBB"  size="1" title="普通用户购买数量<?php echo $vo['pinum']; ?>个起按照批发单价计算"><?php echo $vo['pinum']; ?>个起</font>
                        </td>
                        <td >
                            <font color="#000CF9"  size="3" title="物品库存">
                                 <?php echo (isset($vo['num']) && ($vo['num'] !== '')?$vo['num']:'人工发货'); ?>
                            </font>
                        </td>


                        <td >
                            <?php if($vo['num'] == null): ?>
                             <a class="button button-tiny button-rounded button-small" >缺货</a>
                             <?php else: ?>
                            <a class="button button-primary button-rounded button-small"  href = "<?php echo url('index/trade',array('id'=>$vo['id'])); ?>">购买</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                    </tr>-->

                </table>

            </div>
        </div>
    </div>

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