<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:107:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/admin\view\order\zedit.html";i:1567495604;}*/ ?>


<link rel="stylesheet" href="/static/admin/css/app.min.css">

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
                                    <input  id="order_no" name="order_no" value="<?php echo $info['order_no']; ?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="fields-group">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">商品名称</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <input  id="title" name="title" value="<?php echo $goods[$info['gid']]; ?>" class="form-control" placeholder="">
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
                                <label for="mobile" class="col-sm-2 control-label">手机号码</label>
                                <div class="col-sm-10 col-md-4">
                                    <div class="input-group">
                                        <input  id="mobile" name="mobile" value="<?php echo $info['mobile']; ?>" class="form-control" placeholder="">
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

                </div>

                <!--
                <div class="box-footer">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10 col-md-4">
                        <div class="btn-group">
                            <button type="button" class="btn flat btn-info dataform-submit cates">保存</button>
                        </div>
                        <div class="btn-group">
                            <button type="reset" class="btn flat btn-default dataform-reset">重置</button>
                        </div>
                    </div>
                </div>
                -->

            </form>
        </div>
    </div>
</div>