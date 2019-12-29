<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\index\trade.html";i:1577625490;s:75:"C:\Users\Administrator\Desktop\faka\application\index\view\public\head.html";i:1577542709;s:75:"C:\Users\Administrator\Desktop\faka\application\index\view\public\foot.html";i:1577542709;}*/ ?>

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


<style type="text/css">

</style>
<br/>
<div class="topliucheng"><img src="/index/sink/img/goumaizn02.png" title=""></div>
<div id="body">

    <div class="bobo">

        <div class="left">

            <div class="top">

                <div class="tou">
                    <img src="<?php echo $info['images']; ?>" width="150" height="150" alt="" /></div>
                <div class="bianhao">商品编号：NO0000.<?php echo $info['id']; ?><br />
                    零售单价：<?php echo floatval($info['money']); ?> 元
                    <br /><font color="#ff0000"  size="2">
                        购买<?php echo $info['pinum']; ?>个以上按批发价￥<?php echo floatval($info['pinum']); ?>计算</font>
                </div>


                <div class="wu"></div><div class="bianhao">
                手机扫码购买<br/>
                <img src="https://www.kuaizhan.com/common/encode-png?large=true&data=http://<?php echo url('index/trade',array('id'=>$info['id'])); ?> ">
            </div>
            </div>


        </div>
        <div class="rigth">
            <div class="trade-goodinfo"></div>
            <div class="trade-goodinfo2">
                <span  style="color:#080808">零售单价</span>
                <span class="trade-price">￥<?php echo floatval($info['money']); ?>

              </span>


                <span style="float:right">
                    <?php if($info['huo'] == '0'): ?>
                    <img src="/index/sink/img/zdfh.png">
                     <?php else: ?>
                    <img src="/index/sink/img/sdfh.png">
                    <?php endif; ?>
                    <span style="color:#6c6c6c;font-size:14px;">累积销量：<?php echo floatval($info['paynum']); ?>个</span>
                </span>
            </div><br/>



            <form  method="post">
                <input type="hidden" name='sid' id="sid" value='<?php echo $info['id']; ?>'>

                <input type="hidden" name='hid' id="hid" value='<?php echo $info['huo']; ?>'>

                <?php if($info['moban'] == 0): ?>
                <div class="from">
                    <div class="from_wz_3">联系方式：</div>
                    <div class="from_in_2">
                        <input id="mobile" name="mobile" class="z"  placeholder="请输入联系方式" required>
                    </div>
                </div>
                <?php else: if(is_array($info['moban']) || $info['moban'] instanceof \think\Collection || $info['moban'] instanceof \think\Paginator): $k = 0; $__LIST__ = $info['moban'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($k % 2 );++$k;?>
                <div class="from mo">
                    <div class="from_wz_3" id="title<?php echo $k; ?>"><?php echo $v1['0']; ?>：</div>
                    <div class="from_in_2">
                        <input  id="moban<?php echo $k; ?>" class="" value=""  placeholder="<?php echo $v1['1']; ?>"  />
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="from">
                    <div class="from_wz_3">联系方式：</div>
                    <div class="from_in_2">
                        <input id="mobile" name="mobile" class="z"  placeholder="请输入联系方式" required>
                    </div>
                </div>
               <?php endif; ?>
                <div class="from">
                    <div class="from_wz_3">购买数量：</div>
                    <div class="from_in_2">
                        <input min="0" id="p_num" name="p_num" class="z" type="number"  placeholder="请输入购买数量" />
                    </div>

                    <div class="from_in_2 yanzheng" style="width:200px"> <font size="2" color="#FF7200"><?php echo $info['num']; ?> 库存个</span> </div>
                </div>
            </form>
            <input id="minnum" name="minnum" class="z" type="hidden" value="<?php echo $info['mins']; ?>" >
            <input id="maxnum" name="maxnum" class="z" type="hidden" value="<?php echo $info['maxs']; ?>" >
            <input id="beishu" name="beishu" class="z" type="hidden" value="<?php echo $info['bei']; ?>" >
            <input id="num" name="num" class="z" type="hidden" value="<?php echo $info['num']; ?>" >
            <input id="member_id" class="z" type="hidden" value="<?php echo \think\Session::get('info.id'); ?>" >
            <div class="from">
                <div class="from_off_4"></div>
                <div class="from_in_4" style="width:100px">
                    <input type="button" style="cursor:pointer;" class="button button-3d button-primary button-small" value="购买" onclick="buy('<?php echo $info['money']; ?>');"/>
                </div>
                <div class="from_in_2 yanzheng" style="width:100px">
                    <a href="#" onclick="javascript:history.go(-1);" class="button button-3d button-highlight button-rounded button-small">返回</a>
                </div>
            </div>
            <div class="from"><font color="#2581ff"  size="2"><div class="from_off_4"></div>
                <div class="from_in_4" style="width:450px">购买<?php echo $info['pinum']; ?>个以上按批发价￥<?php echo floatval($info['pipay']); ?> 计算</div>
            </font></div>



            <div class="trade-goodinfo2">
                商品介绍：
                <?php echo (isset($info['content']) && ($info['content'] !== '')?$info['content']:''); ?>
            </div>
            <div class="xiangqing">

            </div>

        </div>

    </div>

</div>
<script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
<script src='/index/sink/js/layer/layer.js'></script>
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


<script>

    //手机验证
    function checkPhone(phone) {
        var tel_reg = /^1(3|4|5|6|7|8|9)\d{9}$/;
        if (tel_reg.test(phone)) {
            return true;
        } else {
            return false;
        }
    }

   function buy(money){

        var sid    = $('#sid').val();//id
        var hid    = $('#hid').val(); //0 自动 1 手动
        var mobile = $('#mobile').val();
        var paynum = parseInt($('#p_num').val()); //购买数量
        var min    = parseInt($('#minnum').val());
        var max    = parseInt($('#maxnum').val());
        var bei    = $('#beishu').val();
        var num    = $('#num').val();
        var moban  = [];


            if(mobile == '' || mobile== undefined){
               layer.msg('请输入联系方式');
               return ;
            }

            if(checkPhone(mobile) == false){
                layer.msg('请输入正确的手机号码');
                return ;
            }


            if(paynum <= 0){
            layer.msg('最少购买数量为'+min);
            return ;
            }

          //自动发货
           if(hid ==0){

           if(paynum > num){
               layer.msg('商品购买数量大于库存');
               return ;
           }

           if(paynum < min){
               layer.msg('商品购买数量最少为'+min);
               return;
           }

           if(paynum > max){
               layer.msg('商品购买数量最多为'+max);
               return;
           }
        }

        //传递数据
        var data = {};

        data.gid  = sid;
        data.huo  = hid;
        if(hid ==0){
            data.num  = parseInt(paynum) * parseInt(bei);
            var len   = $('form .mo').length;
            for(var i=1;i<=len;i++){
                moban.push($("#title"+i).text());
                moban.push($("#moban"+i).val());;
            }
        }else{
            data.num  = 1; //手动默认购买一个
            moban ='';
        }
        data.content  = JSON.stringify(moban);
        data.danpay   = money;
        data.countpay = money * data.num;
        data.mobile   = mobile;
        data.member_id= $('#member_id').val();

        var url = "<?php echo url('index/buy'); ?>";
        $.post(url,{data:data},function(ret){
              if(ret.code== 200){
                  layer.msg(ret.msg,function(){
                      parent.location.href= url+'?order_no='+ret.order+'&did='+ret.gid;
                  })
              };
              if(ret.code == 400){
               layer.msg(ret.msg,function(){
                   parent.location.reload();
               });
              };
        },'json')
    }

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