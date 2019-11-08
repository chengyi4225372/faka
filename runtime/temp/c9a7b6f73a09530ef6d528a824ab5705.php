<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:111:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\index\orderinfo.html";i:1573200883;}*/ ?>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php echo $config['title']; ?> - 卡密提取</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="shortcut icon" href="<?php echo $config['logo']; ?>" />
  <link rel="stylesheet" href="/index/sink/css/amazeui.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
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
    <h1></h1>
    <p><h3>购买时间为：</h3></p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>以下是卡密内容，请自行保存&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="window.opener=null; window.open('','_self');window.close();" class="am-btn am-btn-primary am-btn-sm">返回</a>
      <button type="button" class="copybtn am-btn am-btn-success am-btn-sm" data-clipboard-text='<?php
foreach ($list as $vo) {
  echo $vo['kami']."\n";
}
?>'>复制卡密</button>
    </h3>
    <hr>
    <div class="am-btn-group">
      <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
      <?php echo $vo['kami']; ?><br>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <br>
    <br>
    <hr>
    <p><?php echo $config['info']; ?></p>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
  var clipboard = new ClipboardJS('.copybtn');
      clipboard.on('success', function(e) {
          alert('复制成功');
          e.clearSelection();
      });
      clipboard.on('error', function(e) {
          alert('复制失败请手动复制');
      });
</script>