<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\mobile\trade.html";i:1577624392;s:81:"C:\Users\Administrator\Desktop\faka\application\index\view\public\mobilehead.html";i:1577542709;}*/ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="欢迎光临" />
<meta name="applicable-device" content="mobile" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo $config['title']; ?></title>
<link href="/mobile/sink/css/frozen.css" rel="stylesheet" type="text/css">
<link href="/mobile/sink/css/public.css" rel="stylesheet" type="text/css" />
<link href="/mobile/sink/css/index.css" rel="stylesheet" type="text/css" />
<link href="/mobile/sink/css/login.css" rel="stylesheet" type="text/css">
<script src="/mobile/sink/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/mobile/sink/js/Validform_v5.3.2_min.js"></script>
<link href="/mobile/sink/css/owl.carousel.css" rel="stylesheet">
<script src="/mobile/sink/js/owl.carousel.min.js"></script>
<script src="/index/sink/js/layer/layer.js"></script>
</head>

<body>
<div class="mobile">

 <link href="/mobile/sink/css/baoliao.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
$(document).ready(function(){
	$(".shaixuan").click(function(event){
		event.stopPropagation();
		$(".shaixuan_box").show();
		$(".shaixuan_box").animate({right:'100%'});
		$("body,html").css("overflow","hidden");
		$(".shaixuan_box").css("overflow","auto");
		$('body').bind("touchmove",function(e){
                    e.preventDefault();
            });
	});
	$(".shaixuan_mall a").click(function(event){
		 $("body,html").css("overflow","auto");
		$(".shaixuan_box").animate({right:'-100%'});
		$(".shaixuan_box").hide(5);
		$("body").unbind("touchmove");
	});
});
</script>

<div class="header1">
    <header>
    <div class="header">
        <a class="new-a-back" href="javascript:history.back();"> <span>
        <img src="/mobile/sink/img/iconfont-fanhui.png"></span>
        </a>
      <div class="m_logo">
          <a href="#"><img src="/mobile/sink/img/m-index_02.png"></a>
      </div>
     <div class="header_right shaixuan">
        <img src="/mobile/sink/img/iconfont-shouye.png">
     </div>
      </div>
  </header>
    <div class="shaixuan_box">
	<div class="shaixuan_mall">
    	<h1>站点导航</h1>
        <div class="shaixun_item">
            <a href="/" class="current"></a>
            <a href="/" class="current">商品主页</a>
            <a href="<?php echo url('@index/user/recharge'); ?>" class="current">余额充值</a>
            <a href="<?php echo url('@index/user/myorder'); ?>" class="current">我的订单</a>
            <a href="<?php echo url('@index/user/mychongzi'); ?>" class="current">资金记录</a>
            <a href="<?php echo url('@index/user/editpwd'); ?>" class="current">修改密码</a>
	 </div>
        <p><a href="#" class="shaixuan_colos">关闭</a></p>
    </div>
  </div>
  </div>


    <?php if(empty(\think\Session::get('info')) || ((\think\Session::get('info') instanceof \think\Collection || \think\Session::get('info') instanceof \think\Paginator ) && \think\Session::get('info')->isEmpty())): ?>
	<div class="m_user w">&nbsp;&nbsp;<a href="<?php echo url('mobile/search'); ?>">游客订单查询</a>
	&nbsp;&nbsp;&nbsp;&nbsp;【<a href="<?php echo url('@index/login/login'); ?>">登录</a>】&nbsp;&nbsp;【<a href="<?php echo url('@index/login/reg'); ?>">注册</a>】
    </div>
   <?php else: ?>
     <div class="m_user w">
         <a><b>你好,<?php echo \think\Session::get('info.account'); ?></b></a>
         <a>余额:<?php echo (\think\Session::get('info.money') ?: '0'); ?>元</a>
    <a href="<?php echo url('login/lout'); ?>" onclick="return confirm('确定要退出吗？')">【安全退出】</a>
     </div>
  <?php endif; ?>
<style>
    .bl_view_word img{
        width: 100%;
    }
</style>
<div class="view w">
    <div class="bl_view_img"><img src="<?php echo $info['images']; ?>"  alt="<?php echo $info['title']; ?>" /></div>
    <div class="bl_view_title"><?php echo $info['title']; ?> </div>
    <div class="bl_view_tag">
        <div class="bl_view_price">零售价：<?php echo floatval($info['money']); ?> 元</div>

        <div class="bl_view_mall">批发价：<?php echo floatval($info['pipay']); ?> 元 ( <?php echo $info['pinum']; ?> 个起按批发价)</div>
    </div>
    <div class="bl_view_tag">
        <div class="bl_view_user">商品类型：
           <?php if($info['huo'] == '0'): ?>
            <img src="/mobile/sink/img/zdfh.png">
             <?php else: ?>
            <img src="/mobile/sink/img/sdfh.png">
          <?php endif; ?>
        </div>
        <div class="bl_view_time">销量：<?php echo $info['paynum']; ?>个</div>
    </div>

    <?php if($info['huo'] == 0): ?>
    <div class="bl_view_title">商品库存：
        <font size="2" color="#FF7200"> 库存<?php echo $info['num']; ?> 个</font>
    </div>
    <?php endif; ?>

    <form  method="post">
        <input type="hidden" name='gid' value=''>
        <?php if($info['huo'] == 0): ?>
        <div class="bl_view_title">手机号码：
            <input class="search_input2"  id="mobile_zi" placeholder="请输入联系方式" required>
        </div>
        <?php else: ?>
          <!-- 人工发货 -->
        <?php if(is_array($info['moban']) || $info['moban'] instanceof \think\Collection || $info['moban'] instanceof \think\Paginator): $k = 0; $__LIST__ = $info['moban'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($k % 2 );++$k;?>
        <div class="bl_view_title mo" id="title<?php echo $k; ?>" data-title="<?php echo $v1['0']; ?>"><?php echo $v1['0']; ?>：
            <input class="search_input2" type="tel" id="moban<?php echo $k; ?>" placeholder="<?php echo $v1['1']; ?>" required>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>


        <div class="bl_view_title">手机号码：
            <input class="search_input2" type="tel" id="mobile_sh" placeholder="请输入联系方式" required>
        </div>
        <?php endif; if($info['huo'] == 0): ?>
        <div class="bl_view_title"> 购买数量：
            <input class="search_input2" id="p_num"  type="number" value="" min="0"  placeholder="请输购买数量" required>
        </div>
        <?php endif; ?>

            <input id="minnum" name="minnum" class="z" type="hidden" value="<?php echo $info['mins']; ?>" />
            <input id="maxnum" name="maxnum" class="z" type="hidden" value="<?php echo $info['maxs']; ?>" />
            <input id="bei" name="beishu" class="z" type="hidden" value="<?php echo $info['bei']; ?>" />
            <input id="huo"  class="z" type="hidden" value="<?php echo $info['huo']; ?>" />
            <input id="gid"  class="z" type="hidden" value="<?php echo $info['id']; ?>" />
            <input id="counts"  class="z" type="hidden" value="<?php echo $info['num']; ?>" />
            <input id="danpay"  class="z" type="hidden" value="<?php echo $info['money']; ?>" />
            <input id="member_id"  class="z" type="hidden" value="<?php echo \think\Session::get('info.id'); ?>">
        <div class="go_buy">
            <input type="button"  value="自助购买" id="mobileadd" />
        </div>
    </form>
</div>
<div class="m_userx w">
    <a target="blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $config['kefu']; ?>&amp;site=qq&amp;menu=yes">
        <img  style="CURSOR: pointer" border="0" SRC=/mobile/sink/img/pa alt="发送消息给我"></a>&nbsp;&nbsp;
    &nbsp;&nbsp;<a>客服QQ :<?php echo (isset($config['kefu']) && ($config['kefu'] !== '')?$config['kefu']:''); ?></a>
</div>
<div class="bl_view_content w">
    <h1>商品说明<span>具体使用方法请阅读商品说明</span></h1>
    <div class="bl_view_word">
     <?php echo (isset($info['content']) && ($info['content'] !== '')?$info['content']:''); ?>
    </div>
</div>

<div class="m_user w"> 	
    <a href="#">返回顶部</a>
</div>

</div>


<script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
<script src='/index/sink/js/layer/layer.js'></script>
<script>
    //手机端
    $('#mobileadd').click(function(){
         var huo = $('#huo').val(); //发货类型
         var gid = $('#gid').val();//商品id
         var member_id = $('#member_id').val(); //member
         var urls  = "<?php echo url('mobile/buy'); ?>";
         var hrefs ="<?php echo url('mobile/buy'); ?>";
         //自动发货
         if(huo == 0){
             var mobile = $.trim($('#mobile_zi').val());

             if(mobile == '' || mobile == undefined || mobile == 'undefined'){
              layer.msg('请输入电话信息');
              return false;
             }
            var num = parseInt($('#p_num').val()); //商品购买数量
            var bei = $('#bei').val();
            var mins = parseInt($('#minnum').val());
            var maxs =parseInt($('#maxnum').val());
            var counts = $('#counts').val();
            if(num < mins || num =='' || num == undefined){
                layer.msg('购买商品最少数量是'+mins);
                return false;
            }
            if(maxs < num){
                layer.msg('商品购买数量最多为'+maxs);
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

</body>
</html> 