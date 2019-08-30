<?php
/**
 * 网站首页
 *
 */

namespace app\index\controller;

use think\Config;
use app\index\controller\Base;
use think\Db;
class Index extends Base
{
    //首页
    public function index()
    {
        if($this->request->isGet()){

            $list   = Db::name('goods')->where(['status'=>1])->order('sort desc')->select();
            $cates  = Db::name('good_cates')->order('id desc')->select();
            $indexs = Db::name('content')->where(['id'=>24])->find();
            $categorys = array_column($cates,'title','id');
             //商品库存
            $num = Db::name('card')->field('gid,count(kami) as num')->where(['over'=>0])->group('gid')->select();

            foreach ($list as $k =>$val){
                foreach($num as $key =>$v){
                   if($list[$k]['huo'] == 0 && $list[$k]['id'] == $v['gid']){
                       $list[$k]['num'] = '11';
                   }

                }
            }

            $this->assign('list',$list);
            $this->assign('categorys',$categorys);
            $this->assign('indexs',$indexs);
            return $this->fetch();
        }

    }


    //购买页面
    public function trade()
    {
       if($this->request->isGet()){
          $id = input('get.id','','int');
          if(empty($id)|| $id<=0){
              return false;
          }
          $info = Db::name('goods')->where(['id'=>$id])->find();
          $this->assign('info',$info);
       }
        return $this->fetch();
    }

    //购买页面 生成订单
    public function buy()
    {
      if($this->request->isGet()){
          $this->param = $this->request->param();
          //todo 需要生成订单
          //$order

          //组装 订单页面信息
          if(empty($this->param['data']['id']) || !isset($this->param['data']['id'])){
             return false;
          }

          $orderInfo = Db::name('goods')->field('id,title,num')->where(['id',$this->param['data']['id']])->find();

          if(empty($orderInfo)){
              $this->result('','400','请求数据丢失','json');
          }

          if(!empty($orderInfo) && isset($orderInfo) && is_array($orderInfo)){
              $orderInfo['mobile'] =  $this->param['data']['mobile'];
              $orderInfo['num']    =  $this->param['data']['num'];
              $orderInfo['order']  =  time(); //todo 订单号 造假数据 真是数据应该进去订单表
              $this->result('','200','操作成功','json');
          }
          return $this->fetch();
      }

    }

}