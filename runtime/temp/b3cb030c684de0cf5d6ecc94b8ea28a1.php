<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\mobile\orderinfo.html";i:1577808866;}*/ ?>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title> 卡密提取</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="stylesheet" href="/index/sink/css/amazeui.min.css"/>
  <script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1><?php echo $goods[$info['gid']]; ?></h1>
    <p><h3>购买时间为：<?php echo $info['create_time']; ?></h3></p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>以下是卡密内容，请自行保存&nbsp;&nbsp;&nbsp;&nbsp;
      <?php if($info['huo'] == 1): ?>
      <a href="javascript:void(0);"  data-url="<?php echo url('mobile/index'); ?>" onclick="url_href(this);">[返回]</a>
      <?php else: ?>
      <a href="javascript:void(0);" onclick="history.go(-1)">[返回]</a>
      <?php endif; ?>
    </h3>
    <hr>
    <div class="am-btn-group">
               <!-- 手动 刚发货秘钥-->
               <?php if($info['huo'] == 1): ?>
                 <?php echo $info['content']; else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <?php echo $vo['kami']; ?> <br/>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
    <br>
    <br>
    <hr>
    <p><?php echo $config['info']; ?></p>
  </div>
</div>
<script>
function url_href(obj){
  var urls = $(obj).attr('data-url');

  if(urls == '' || urls == undefined || urls == 'undefined'){
    return false;
  }

  window.location.href = urls;
}
</script>
</body>
</html>
