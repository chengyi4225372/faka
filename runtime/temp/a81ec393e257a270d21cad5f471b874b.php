<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:107:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/admin\view\order\pedit.html";i:1576219876;}*/ ?>


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

                    <div class="fields-group">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">订单号</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                   <?php echo $info['order_no']; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="fields-group">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">商品名称</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                 <?php echo $goods[$info['gid']]; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fields-group">
                        <div class="form-group">
                            <label for="num" class="col-sm-2 control-label">商品数量</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <input  id="num" name="num" value="<?php echo $info['num']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="fields-group">
                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">商品总价</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <input  id="countpay" name="countpay" value="<?php echo $info['countpay']; ?>" class="form-control" placeholder="">
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
                                    <option value="2" <?php if($info['status'] == '2'): ?> aria-selected="" <?php endif; ?>>商品发货</option>
                                    <option value="3" <?php if($info['status'] == '3'): ?> aria-selected="" <?php endif; ?> >联系客服退款</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-sm-2 control-label">购买信息</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <textarea id="content" name="content" class="form-control" style="height: 200px;width: 250px;" placeholder="商品卡密">
                                <?php if(is_array($info['content']) || $info['content'] instanceof \think\Collection || $info['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                   <?php echo $vo; endforeach; endif; else: echo "" ;endif; ?>
                                </textarea>
                            </div>
                        </div>
                    </div>


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