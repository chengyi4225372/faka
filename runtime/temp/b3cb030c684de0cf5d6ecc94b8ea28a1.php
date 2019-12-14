<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"C:\Users\Administrator\Desktop\faka\public/../application/index\view\mobile\orderinfo.html";i:1576332076;}*/ ?>
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
      <a href="javascript:void(0);" onclick="window.location.href='<?php echo url('mobile/index'); ?>'">[返回]</a>
    </h3>
    <hr>
    <div class="am-btn-group">
      11111

    </div>
    <br>
    <br>
    <hr>
    <p><?php echo $config['info']; ?></p>
  </div>
</div>
</body>
</html>
