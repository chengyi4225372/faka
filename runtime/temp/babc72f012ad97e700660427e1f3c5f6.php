<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:110:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/admin\view\leveluser\edit.html";i:1577666982;}*/ ?>


<link rel="stylesheet" href="/static/admin/css/app.min.css">

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <form  class="form-horizontal dataForm" enctype="multipart/form-data">
                <input type="hidden" id="id" value="<?php echo $info['id']; ?>">
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>订单号</td>
                            <td><div><?php echo $info['order']; ?></div></td>
                            <td>支付类型</td>
                            <td><div>
                                <?php echo $info['types']; ?>
                            </div></td>
                        </tr>
                        <tr>

                        </tr>

                        <tr>
                            <td>支付金额</td>
                            <td><div><?php echo $info['paymoney']; ?></div></td>
                            <td>描述</td>
                            <td><div><?php echo $info['descs']; ?></div></td>
                        </tr>

                        <tr>
                            <td>支付回执单号</td>
                            <td><div><?php echo $info['trade_no']; ?></div></td>
                            <td>创建时间：</td>
                            <td><div><?php echo $info['create_time']; ?></div></td>
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
                            <td>升级用户：</td>
                            <td><div><?php echo $members[$info['mid']]; ?></div></td>
                        </tr>

                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>