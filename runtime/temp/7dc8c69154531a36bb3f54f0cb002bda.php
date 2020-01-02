<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:105:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\two\trade.html";i:1577926366;s:102:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\twombhead.html";i:1571190314;s:102:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\application\index\view\public\twombfoot.html";i:1577263336;}*/ ?>

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
                        <span class="trade-price">￥<?php echo floatval($info['money']); ?> </span>
                        <span style="float:right">
                                        <span style="color: #6C6C6C;">累积销量：</span>
                                        <span style="color:#6c6c6c;font-size:18px;"><?php echo (isset($info['paynum']) && ($info['paynum'] !== '')?$info['paynum']:'0'); ?></span>
                                    </span><br>
                        <?php if($info['huo'] == '0'): ?>
                        <span style="color:#6C6C6C">库存：<?php echo $info['num']; ?>件</span>
                        <?php endif; ?>
                        <a id="lookpf" style="margin-left:5px;font-size:10px" href="javascript:;" onclick="lookpf('<?php echo $info['pinum']; ?>','<?php echo $info['pipay']; ?>')">查看批发价</a>
                        <?php if($info['huo'] == '0'): ?>
                        <br><span style="color:#6c6c6c;">服务：自动发货 无忧售后</span>
                        <?php else: ?>
                        <br><span style="color:#6c6c6c;">服务：手工发货</span>
                        <?php endif; ?>
                    </p>
                    <script>
                        function lookpf(num,pay) {
                            layer.tips('满'+num+'件'+pay+'元/件', '#lookpf', {
                                tips: [3, '#78BA32']
                            });
                        }

                    </script>
                    <form  method="post" >
                        <?php if($info['moban'] == 0): ?>
                        <div class="from">
                                    <span style="color:#6c6c6c;margin-left:10px">联系方式：
                                        <input  id="mobile_zi" style="padding: 0.5em;font-size: 1rem;line-height: 1.2;color: #333;" placeholder="请输入联系方式" required="" value="" />
                                    </span>
                        </div>
                        <br>
                        <span style="color:#6c6c6c;margin-left:10px">数量：
                          <input type="button" value="+" style="margin-right:-6px;" class="trade-input-count-button" onclick="countoper('jia')">
                          <input type="text" class="trade-input-count" id="p_num" name="num" value="1" placeholder="请输入购买数量" required="" min="1" max="9999">
                          <input type="button" value="-" style="margin-left:-6px;" class="trade-input-count-button" onclick="countoper('jian')">
                       </span>
                        <?php else: if(is_array($info['moban']) || $info['moban'] instanceof \think\Collection || $info['moban'] instanceof \think\Paginator): $k = 0; $__LIST__ = $info['moban'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($k % 2 );++$k;?>
                        <div class="from mo">
                                    <span style="color:#6c6c6c;margin-left:10px"  id="title<?php echo $k; ?>" data-title="<?php echo $v1[0]; ?>"><?php echo $v1[0]; ?>：
                                        <input  id="moban<?php echo $k; ?>" style="padding: 0.5em;font-size: 1rem;line-height: 1.2;color: #333;" placeholder="<?php echo $v1[1]; ?>" required>
                                    </span>
                        </div>
                        <br>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        <div class="from">
                                    <span style="color:#6c6c6c;margin-left:10px">联系方式：
                                        <input id="mobile_sh"  style="padding: 0.5em;font-size: 1rem;line-height: 1.2;color: #333;" placeholder="请输入联系方式" value="" required="" />
                                    </span>
                        </div>
                        <?php endif; ?>

                    </form>
                    <input id="minnum" name="minnum" class="z" type="hidden" value="<?php echo $info['mins']; ?>" />
                    <input id="maxnum" name="maxnum" class="z" type="hidden" value="<?php echo $info['maxs']; ?>" />
                    <input id="bei" name="beishu" class="z" type="hidden" value="<?php echo $info['bei']; ?>" />
                    <input id="huo"  class="z" type="hidden" value="<?php echo $info['huo']; ?>" />
                    <input id="gid"  class="z" type="hidden" value="<?php echo $info['id']; ?>" />
                    <input id="counts"  class="z" type="hidden" value="<?php echo $info['num']; ?>" />
                    <input id="danpay"  class="z" type="hidden" value="<?php echo $info['money']; ?>" />
                    <input id="member_id"  class="z" type="hidden" value="<?php echo \think\Session::get('info.id'); ?>" />

                    <br>
                    <button type="button"  class="am-btn am-btn-danger am-btn-xl am-square" id="paysubmit" style="margin-top:20px">
                        <span class="am-icon-shopping-cart"></span>立即购买
                    </button>

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


<script>
    //数量添加 修改
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
   
    //手机验证
    function checkPhone(phone) {
        var tel_reg = /^1(3|4|5|6|7|8|9)\d{9}$/;
        if (tel_reg.test(phone)) {
            return true;
        } else {
            return false;
        }
    }


    //生成订单 商城模板
    $('#paysubmit').click(function(){
        var huo = $('#huo').val(); //发货类型
        var gid = $('#gid').val();//商品id
        var member_id = $('#member_id').val(); //member
        var urls  = "<?php echo url('two/buy'); ?>";
        var hrefs = "<?php echo url('two/buy'); ?>";
        //自动发货
        if(huo == 0){
            var mobile = $.trim($('#mobile_zi').val());

            if(mobile == '' || mobile == undefined || mobile == 'undefined'){
                layer.msg('请输入电话信息');
                return false;
            }

            if(checkPhone(mobile) == false){
                layer.msg('电话号码不合法');
                return false;
            }
            var num = parseInt($('#p_num').val()); //商品购买数量
            var bei = parseInt($('#bei').val());
            var min = parseInt($('#minnum').val());
            var max = parseInt($('#maxnum').val());
            var counts = $('#counts').val();
            if(num < min || num =='' || num == undefined){
                layer.msg('最少购买数量是'+min);
                return false;
            }

            if(num > max){
                layer.msg('商品购买数量最大是'+max);
                return false;
            }

            if(num >counts){
                layer.msg('不好意思，商品购买大于商品库存总数！');
                return false;
            }

            num = num * bei;
            var danpay   = $('#danpay').val();//单价
            var countpay = (num * bei) * danpay; //总价

            $.post(urls,{'gid':gid,'member_id':member_id,'mobile':mobile,'num':num,'huo':0,'danpay':danpay,'countpay':countpay},function(ret){
                if(ret.code == 200){
                    layer.msg(ret.msg,function(){
                        parent.location.href = hrefs+'?order_no='+ret.order+'&did='+ret.gid;
                    })
                }

                if(ret.code == 400){
                    layer.msg(ret.msg,function(){
                        parent.location.reload();
                    })
                }
            },'json');
        }

        //手动发货
        if(huo == 1){
            var mobile =$.trim($('#mobile_sh').val());//电话

            if(mobile =='' || mobile == undefined || mobile =='undefined'){
                layer.msg('请输入用户信息');
                return false;
            }

            if(checkPhone(mobile) == false){
                layer.msg('电话号码不合法');
                return false;
            }

            //模板数据
            var content= [];

            var len   = $('form .mo').length;
            for(var i=1;i<=len;i++){
                content.push($("#title"+i).attr('data-title'));
                content.push($("#moban"+i).val());
            }

            console.log(content);

            var danpay = $('#danpay').val();//单价

            var num  = 1 ; //人工发货默认数量1

            var countpay = danpay * num ;
            $.post(urls,{'mobile':mobile,'gid':gid,'member_id':member_id,'huo':1,'danpay':danpay,'content':JSON.stringify(content),'num':num,'countpay':countpay},function(ret){
                if(ret.code == 200){
                    layer.msg(ret.msg,function(){
                        parent.location.href = hrefs+'?order_no='+ret.order+'&did='+ret.gid;
                    })
                }

                if(ret.code == 400){
                    layer.msg(ret.msg,function(){
                        parent.location.reload();
                    })
                }
            },'json');
        }


    })


    /*
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
     */
</script>

</script>

</div>



