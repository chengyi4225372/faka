<?php
/**
 * 网站首页
 *
 */

namespace app\index\controller;

use think\Config;
use app\index\controller\Base;
use app\index\controller\Pays;
use think\Db;


class Index extends Base
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub

        $config = Db::name('config')->where(['id'=>1])->find();
        $this->assign('config',$config);


        if($config['modou'] == 2){
            $this->redirect('two/index');
        }
        return false;
    }

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
                if(!is_array($num) || empty($num)){
                    $list[$k]['num'] = null;
                }

                if(is_array($num) && !empty($num)){
                    foreach($num as $key =>$v){
                        if($list[$k]['huo'] == 0 && $list[$k]['id'] == $v['gid']){
                            $list[$k]['num'] = $v['num'];
                        }
                    }
                }

                if($list[$k]['huo'] == 1){
                    $list[$k]['num'] = '人工发货';
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

          //验证用户等级 再去根据等级 找到会员价格
          $user = Db::name('member')->where(['id'=>$this->param['data']['member_id']])->find();

          //商品会员价格
          $goodpay = Db::name('goods')->where(['id'=>$this->param['data']['gid']])->find();

          //得到打折的倍数
          //正常用户
          if($user['level'] == 1){
              $countpay = $this->param['data']['countpay'];
          }

          //普通代理
          if($user['level'] == 2){
              $countpay = $this->param['data']['countpay'] * $goodpay['nomal'];
          }
          //高级
          if($user['level'] == 3){
              $countpay = $this->param['data']['countpay'] * $goodpay['high'];
          }

          $array = [
              'gid'  =>$this->param['data']['gid'],
              'huo'  =>$this->param['data']['huo'],
              'num'  =>$this->param['data']['num'],
              'content'   =>$this->param['data']['content'],
              'danpay'    =>$this->param['data']['danpay'],
              'countpay'  =>$countpay,
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
       return false;
    }

    //自动发货
    public function zdfahuo(){
       if($this->request->isGet()){
          $orders = input('get.orderno','','trim');
           //根据订单 商品 id 查询卡密
          $order = Db::name('order')->where(['order_no'=>$orders])->find();
          $cardlist = Db::name('card')->where(['oid'=>$order['id'],'over'=>1])->select();
          $this->assign('list',$cardlist);
          $this->assign('orders',$orders);
          return $this->fetch();
       }
        return false;
    }

    //手动发货
   public function sdfahuo(){
        if($this->request->isGet()){
            $orders = input('get.orderno','','trim');
            $info   = Db::name('order')->where(['order_no'=>$orders])->field('order_no,countpay')->find();
            $this->assign('info',$info);
            return $this->fetch();
        }
        return false;
   }

   //搜索
   public function search(){
        if($this->request->isGet()){
            $orders = input('get.orderno','','trim');
            $w =[
                'order_no'=>$orders,
                'mobile|order_no'=>['like','%'.$orders.'%'],
            ];
            $info   = Db::name('order')->where($w)->paginate(15);
            $count  = Db::name('order')->where($w)->count();
            $good   = Db::name('goods')->order('id desc')->select();
            $goods  = array_column($good,'title','id');
            $this->assign('orders',$info);
            $this->assign('goods',$goods);
            $this->assign('count',$count);
            return $this->fetch();
        }
        return false;
   }

   //自动发货卡密
   public function orderinfo(){
       $order_no = input('get.order','','trim');

       $order = Db::name('order')->where(['order_no'=>$order_no])->find();
       //购买卡密量
       $list  = Db::name('card')->where(['oid'=>$order['id'],'over'=>1])->order('id asc')->limit(0,$order['num'])->select();

       $this->assign('list',$list);
       $this->assign('orders',$order);
       return $this->fetch();
   }

   //导出方法
   public function dao(){

        if($this->request->isGet()){
            $orders = input('get.order','','trim');
            if(empty($orders)){
                return false;
            }

            $orderId = Db::name('order')->where(['order_no'=>$orders])->field('id')->find();

            $list    = Db::name('card')->where(['oid'=>$orderId['id']])->order('id asc')->select();

            foreach($list as $k =>$value){
                $content = $value['kami']."\r\n"; //下载内容
            }
            header("Content-type: application/octet-stream");
            header("Accept-Ranges: bytes");
            header("Content-Disposition: attachment; filename = 下载文档.txt"); //文件命名
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Pragma: public");
            echo $content;
            exit();
        }
        return false;
   }

}