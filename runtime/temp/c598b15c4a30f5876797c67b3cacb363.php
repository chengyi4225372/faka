<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:107:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/admin\view\order\cedit.html";i:1577430022;}*/ ?>


<link rel="stylesheet" href="/static/admin/css/app.min.css">

<script src="/twomb/js/jquery.js"></script>
<script src="/static/admin/plugins/layer/layer.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <!-- <form  class="form-horizontal dataForm" enctype="multipart/form-data"> -->
                <input type="hidden" id="id" value="<?php echo $info['id']; ?>">

                <div class="box-body">

                    <div class="box-body">
                        <table class="table table-bordered">
                          <tbody>
                          <tr>
                            <td>订单号</td>
                            <td><div><?php echo $info['member_no']; ?></div></td>
                          </tr>
                          <tr>
                            <td>支付类型</td>
                            <td><div><?php echo $info['paytype']; ?></div></td>
                          </tr>

                          <tr>
                            <td>用户</td>
                            <td><div><?php echo $members[$info['mid']]; ?></div></td>
                          </tr>

                          <tr>
                            <td>充值金额</td>
                            <td><div><?php echo $info['pay']; ?></div></td>
                          </tr>

                          <tr>
                            <td>支付状态：</td>
                            <td><div>  
                                <?php if($info['status'] == '1'): ?>
                                      已支付
                                    <?php else: ?>
                                      未支付
                                    <?php endif; ?>
                                </div></td>
                          </tr>

                          <tr>
                            <td>创建时间：</td>
                            <td><div><?php echo date('Y-m-d,h:i:s',$info['create_time']); ?></div></td>
                          </tr>

                          <tr>
                            <td>支付回执单号</td>
                            <td><div><?php echo $info['trade_no']; ?></div></td>
                          </tr>
                         
                          
                        </tbody>
                    </table>
                      </div>

                </div>

            <!-- </form> -->
        </div>
    </div>
</div>