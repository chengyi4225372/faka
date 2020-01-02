<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:111:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/index\view\index\orderinfo.html";i:1577936753;}*/ ?>
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

  <script type="text/javascript" src="/index/sink/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/index/sink/js/layer/layer.js"></script>

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
    <h1><?php echo (isset($config['title']) && ($config['title'] !== '')?$config['title']:''); ?></h1>
    <p><h3>购买时间为：<?php echo $orders['create_time']; ?></h3></p>
  </div>
  <hr />
</div>
<?php if($orders['huo'] == 0): ?>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>以下是卡密内容，请自行保存&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" onclick="cancle(this)" data-order="<?php echo $orders['order_no']; ?>" class="am-btn am-btn-primary am-btn-sm">返回</a>
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
<?php else: ?>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>以下是订单回执内容，请自行保存&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="cancle(this)" data-order="<?php echo $orders['order_no']; ?>" class="am-btn am-btn-primary am-btn-sm">返回</a>
      <!-- <button type="button" class="copybtn am-btn am-btn-success am-btn-sm" data-clipboard-text=''></button> -->
    </h3>
    <hr>
    <div class="am-btn-group">
          <?php echo (isset($orders['orderback']) && ($orders['orderback'] !== '')?$orders['orderback']:'正在发货'); ?>
    </div>
    <br>
    <br>
    <hr>
    <p><?php echo $config['info']; ?></p>
  </div>
</div>
<?php endif; ?>
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
   
   //返回
  function cancle(obj){
     var  urls = "<?php echo url('index/search'); ?>";
     var order = $(obj).attr('data-order');

     if(order == '' || order == undefined){
       return false;
     }

     window.location.href = urls+'?orderno='+order;
  }


</script>