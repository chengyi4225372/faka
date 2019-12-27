<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:107:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/admin\view\order\zedit.html";i:1577436997;}*/ ?>


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
                        <td><div><?php echo $info['order_no']; ?></div></td>
                        <td>支付类型</td>
                        <td><div>
                            <?php if($info['types'] == null): ?>
                            null
                           <?php elseif($info['types'] == 'alipay'): ?>
                           <img src="/index/images/ali.png" style="height: 40px;width: 40px;">
                           <?php elseif($info['types'] == 'wxpay'): ?>
                           <img src="/index/images/wechat.png" style="height: 40px;width: 40px;">
                           <?php elseif($info['types'] == 'qqpay'): ?>
                           <img src="/index/images/qq.png" style="height: 40px;width: 40px;">
                           <?php else: endif; ?>
                        </div></td>
                      </tr>
                      <tr>
                
                      </tr>

                      <tr>
                        <td>商品名称</td>
                        <td><div><?php echo $goods[$info['gid']]; ?></div></td>
                        <td>商品数量</td>
                        <td><div><?php echo $info['num']; ?></div></td>
                      </tr>

                      <tr>
                        <td>联系方式</td>
                        <td><div><?php echo $info['mobile']; ?></div></td>
                        <td>商品总价</td>
                        <td><div><?php echo floatval($info['countpay']); ?></div></td>
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
                            <td>支付ip：</td>
                            <td><div><?php echo $info['ip']; ?></div></td>
                      </tr>

                      <tr>
                        <td>创建时间：</td>
                        <td><div><?php echo $info['create_time']; ?></div></td>
                        <td>订单类型</td>
                        <td><div>
                             <?php if($info['huo'] == '0'): ?>
                              自动发货
                             <?php else: ?>
                             手动发货
                             <?php endif; ?>
                        </div></td>
                      </tr>
                     
                      
                      <tr>
                        <td>会员账号：</td>
                        <td><div>
                         <?php if(empty($info['member_id']) || (($info['member_id'] instanceof \think\Collection || $info['member_id'] instanceof \think\Paginator ) && $info['member_id']->isEmpty())): ?>
                            非会员订单
                          <?php else: ?>
                          <?php echo $members[$info['member_id']]; endif; ?>
                        </div></td>
                        <td>发货模板信息</td>
                        <td><div>
                         <?php if($info['content'] == null or $info['content'] == 0): ?>
                          自动发货订单
                          <?php else: ?>
                          <?php echo $info['content']; endif; ?>
                        </div></td>
                      </tr>

                            
                      <tr>
                        <td>订单操作：</td>
                        <td><div>
                         <?php if($info['dan'] == 1): ?>
                         <a class="btn btn-block btn-success btn-xs">正常下单</a>
                         <?php else: ?>
                         <a class="btn btn-block btn-success btn-xs">补单</a>
                         <?php endif; ?>
                        </div></td>
                      </tr>

                     
                      
                    </tbody>
                </table>
                  </div>
 
            </form>
        </div>
    </div>
</div>