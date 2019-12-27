<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:107:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/admin\view\order\pedit.html";i:1577438111;}*/ ?>


<link rel="stylesheet" href="/static/admin/css/app.min.css">


<script src="/twomb/js/jquery.js"></script>
<script src="/static/admin/js/app.min.js"></script>
<script src="/static/admin/plugins/layer/layer.js"></script>

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

                <!--
                <div class="box-body">

                    <div class="fields-group">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">订单号</label>
                            <div class="col-sm-10 col-md-3">
                                <div class="input-group">
                                  <input type="text" value='<?php echo $info['order_no']; ?>' class="form-control" />
                                </div>
                            </div>

                            <label for="title" class="col-sm-2 control-label">商品名称</label>
                            <div class="col-sm-10 col-md-3">
                                <div class="input-group">
                                <input type="text" value='<?php echo $goods[$info['gid']]; ?>' class="form-control" /> 
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="fields-group">
                        <div class="form-group">
                            <label for="num" class="col-sm-2 control-label">商品数量</label>
                            <div class="col-sm-10 col-md-3">
                                <div class="input-group">
                                    <input  id="num" name="num" value="<?php echo $info['num']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>

                            <label for="mobile" class="col-sm-2 control-label">商品总价</label>
                            <div class="col-sm-10 col-md-3">
                                <div class="input-group">
                                    <input  id="countpay" name="countpay" value="<?php echo $info['countpay']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fields-group">
                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">支付方式</label>
                            <div class="col-sm-10 col-md-3">
                                <div class="input-group">
                                    <input  value="<?php echo $info['types']; ?>" class="form-control" />
                                </div>
                            </div> 

                            <label for="mobile" class="col-sm-2 control-label">联系电话</label>
                            <div class="col-sm-10 col-md-3">
                                <div class="input-group">
                                    <input  value="<?php echo $info['mobile']; ?>" class="form-control" />
                                </div>
                            </div> 
                        </div>
                    </div> 


                    <div class="fields-group">
                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">购买用户</label>
                            <div class="col-sm-10 col-md-3">
                                <div class="input-group">
                                    <?php if($info['member_id'] != 0 or $info['member_id'] != null): ?>
                                    <input  value="<?php echo $members[$info['member_id']]; ?>" class="form-control" />
                                    <?php else: ?>
                                    <input  value="游客" class="form-control" />
                                    <?php endif; ?>
                                </div>
                            </div> 

                            <label for="mobile" class="col-sm-2 control-label">支付状态</label>
                            <div class="col-sm-10 col-md-3">
                                <div class="input-group">
                                    <?php switch($info['status']): case "1": ?>
                                    <a class="btn btn-block btn-success btn-xs">已支付</a>
                                    <?php break; case "2": ?>
                                    <a class="btn btn-block btn-linkedin btn-xs">已发货</a>
                                    <?php break; case "3": ?>
                                    <a class="btn btn-block btn-foursquare btn-xs">联系客服退款</a>
                                    <?php break; default: ?>
                                    <a class="btn btn-block btn-primary btn-xs">未支付</a>
                                    <?php endswitch; ?>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-sm-2 control-label">人工发货商品状态</label>
                        <div class="col-sm-10 col-md-4">
                            <div class="input-group">
                                <select name="status" id="status" class="form-control">
                                    <option value="100">请选择....</option>
                                    <option value="2" <?php if($info['status'] == '2'): ?> selected='true' <?php endif; ?>>商品发货</option>
                                    <option value="3" <?php if($info['status'] == '3'): ?> selected="true" <?php endif; ?> >联系客服退款</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-sm-2 control-label">购买信息</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <textarea id="content" name="content" class="form-control" style="height: 99px; width: 679px; margin: 0px;" placeholder="商品卡密">
                                <?php if(is_array($info['content']) || $info['content'] instanceof \think\Collection || $info['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                   <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
                                </textarea>
                            </div>
                        </div>
                    </div>

   -->
                    <div class="box-footer">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-10 col-md-4">
                            <div class="btn-group">
                                <button type="button" class="btn flat btn-info dataform-submit pedit">保存</button>
                            </div>
                            <div class="btn-group">
                                <button type="reset" class="btn flat btn-default dataform-reset">重置</button>
                            </div>
                        </div>
                    </div>


                </div>

            </form>
        </div>
    </div>
</div>
<script>
    $('.pedit').click(function(){

        var data = {};
        data.num = $('#num').val();
        data.countpay = $('#countpay').val();
        data.id  = $('#id').val();
        data.status  = $('#status option:selected').val();
        data.content  = $('#content').val();

        if(data.status == '100'){
            layer.msg('请选择人工发货状态');
            return false;
        }

        var url = "<?php echo url('order/pedit'); ?>";

        $.post(url,{data:data},function(ret){
            if(ret.code== 200){
               layer.msg(ret.msg,function(){
                   parent.location.href="<?php echo url('order/person'); ?>";
               })
            };
            if(ret.code == 400){
                layer.msg(ret.msg,function(){
                    parent.location.reload();
                })
            }
        },'json')

    })
</script>