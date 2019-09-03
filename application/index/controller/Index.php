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
                       $list[$k]['num'] = $v['num'];
                   }
                   if($list[$k]['huo'] == 1){
                       $list[$k]['num'] = '人工发货';
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
          //卡密
          $num  = Db::name('card')->where(['gid'=>$id,'over'=>0])->count('kami');
          $info['num'] = $num;
          //模板
          if($info['rengong'] == 0 || $info['rengong'] == ''){
              $info['moban'] = 0;
          }
          if($info['rengong'] != '' || $info['rengong'] != 0){
              $moban = Db::name('moban')->field('content')->where(['id'=>$info['rengong']])->find();
              $info['moban'] = explode('**',$moban['content']);
              foreach ($info['moban'] as $i =>$val){
                  $info['moban'][$i] = explode('-',  $info['moban'][$i]);
              }
          }

         // halt($info);
          $this->assign('info',$info);
       }
        return $this->fetch();
    }

    //生成订单
    public function buy()
    {
      if($this->request->isPost()){
          $this->param = $this->request->param();

          //组装 订单页面信息
          if(empty($this->param['data']['gid']) || !isset($this->param['data']['gid'])){
             return false;
          }

          $array = [
              'gid'  =>$this->param['data']['gid'],
              'huo'  =>$this->param['data']['huo'],
              'num'  =>$this->param['data']['num'],
              'content'   =>$this->param['data']['content'],
              'danpay'    =>$this->param['data']['danpay'],
              'countpay'  =>$this->param['data']['countpay'],
              'order_no'  => create_order(),
              'mobile'    => $this->param['data']['mobile'],
              'member_id' => $this->param['data']['member_id'],
          ];


          $res = Db::name('order')->insertGetId($array);

          if($res){
              return json(['code'=>200,'msg'=>'订单生成成功，马上跳转....','order'=>$array['order_no'],'gid'=>$res]);
          }else {
              return json(['code'=>400,'msg'=>'订单生成失败']);
          }
      }

      if($this->request->isGet()){
           $id = input('get.did');
           $order_no = input('get.order_no');
           if(empty($id) && empty($order_no)){
               return false;
           }
           $goods = Db::name('goods')->order('id desc')->select();
           $order = Db::name('order')->where(['id'=>$id,'order_no'=>$order_no])->find();
           $goods = array_column($goods,'title','id');

           $this->assign('order',$order);
           $this->assign('goods',$goods);
           return $this->fetch();
      }

    }

}