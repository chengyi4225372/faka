<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:107:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\lizi\public/../application/admin\view\goods\nodes.html";i:1566887712;}*/ ?>


<link rel="stylesheet" href="/static/admin/css/app.min.css">
<script src="/static/admin/js/app.min.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body table-responsive">
                <table class="table table-hover table-bordered datatable" width="100%">
                    <thead>
                    <tr>
                        <th>商品Id</th>
                        <th>排序</th>
                        <th>商品名称</th>
                        <th>商品数量</th>
                        <th>价格</th>
                        <th>发货状态</th>
                        <th>商品所属分类</th>
                        <th>创建时间</th>
                        <th>商品状态</th>
                    </tr>
                    </thead>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tbody>
                    <tr>
                        <td><?php echo $vo['id']; ?></td>
                        <td><?php echo (isset($vo['sort']) && ($vo['sort'] !== '')?$vo['sort']:''); ?></td>
                        <td><?php echo $vo['title']; ?></td>
                        <td><?php echo (isset($vo['num']) && ($vo['num'] !== '')?$vo['num']:'0'); ?></td>
                        <td><?php echo $vo['money']; ?></td>
                        <td>
                            <?php if($vo['huo'] == '0'): ?>
                            自动发货
                            <?php else: ?>
                            手动发货
                            <?php endif; ?>
                        </td>
                        <td><?php echo $category[$vo['cid']]; ?></td>
                        <td><?php echo $vo['create_time']; ?></td>
                        <td class="td-do">
                            <?php if($vo['status'] == '1'): ?>
                            <a data-href="<?php echo url('goods/jiag',array('id'=>$vo['id'])); ?>"
                               class="btn btn-success btn-xs ajax" data="<?php echo $vo['status']; ?>">
                                <i class="fa fa-pencil">上架</i>
                            </a>
                            <?php else: ?>
                            <a data-href="<?php echo url('goods/jiag',array('id'=>$vo['id'])); ?>" class="btn btn-warning  btn-xs ajax" data="<?php echo $vo['status']; ?>">
                                <i class="fa fa-pencil">下架</i>
                            </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    </tbody>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </div>
        <?php echo $list->render(); ?>

