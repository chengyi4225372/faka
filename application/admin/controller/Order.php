<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 23:17
 * 订单控制器
 */

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use Think\Db;

class Order extends Base
{  

    //自动发货
    public function index()
    {
        $gid     = input('get.gid','','int');
        $paytype = input('get.paytype','','trim');
        if(empty($gid) || empty($paytype)){
            $w= [
                'huo'=>0,
                 'is_delete'=>0,
            ];
        }

        if(!empty($gid) && !empty($paytype)){
            $w = [
                  'huo'=>0,
                  'is_delete'=>0,
                  'gid'=>$gid,
                  'order_no|mobile'=>$paytype,
            ];
        }
        
      
        $list   = Db::name('order')->where($w)->paginate(15);
        $goodes = Db::name('goods')->where('huo',0)->select();
        $member = Db::name('member')->field('id,account')->select();
        $goods  = array_column($goodes,'title','id');
        $info   = array_column($member,'account','id');
        $this->assign('list',$list);
        $this->assign('goods',$goods);
        $this->assign('goodes',$goodes);
        $this->assign('info',$info);
        return $this->fetch();
    }

    public function zedit()
    {
        $id   = input('get.id','','int');
        if($id<=0 || empty($id)){
            return false;
        }
        $info = Db::name('order')->where(['id'=>$id,'huo'=>0,'is_delete'=>0])->find();
        $goods= Db::name('goods')->field('id,title')->select();
        $goods= array_column($goods,'title','id');
        $this->assign('info',$info);
        $this->assign('goods',$goods);
        $member = Db::name('member')->field('id,account')->order('create_time desc')->select();
        $members = array_column($member,'account','id');
        $this->assign('members',$members);
        return $this->fetch();
    }

    public function zdel()
    {
        $id = input('get.id','','int');
        if($id<=0 || empty($id)){
            return false;
        }
        $res = Db::name('order')->where('id',$id)->update(['is_delete'=>1]);

        if($res){
            return json(['code'=>200,'msg'=>'删除成功']);
        }else {
            return json(['code'=>400,'msg'=>'删除失败']);
        }
    }

    //人工发货
    public function person()
    {
        $gid     = input('get.gid','','int');
        $paytype = input('get.paytype','','trim');

        if(empty($gid) && empty($paytype)){
            $w = ['huo'=>1, 'is_delete'=>0];
        }

        if(!empty($gid) && !empty($paytype)){
            $w = ['huo'=>1,'is_delete'=>0,'gid'=>$gid,'order_no|mobile'=>$paytype];
        }


        $list   = Db::name('order')->where($w)->paginate(15);
        $goodes = Db::name('goods')->where('huo',1)->select();
        $goods  = array_column($goodes,'title','id');
        $member = Db::name('member')->field('id ,account')->select();
        $info   = array_column($member,'account','id');
        $this->assign('goods',$goods);
        $this->assign('goodes',$goodes);
        $this->assign('list',$list);
        $this->assign('info',$info);
        return $this->fetch();
    }

    public function pedit()
    {
       if($this->request->isGet()){
           $id   = input('get.id','','int');
           if($id<=0 || empty($id)){
               return false;
           }
           $info = Db::name('order')->where(['id'=>$id,'huo'=>1,'is_delete'=>0])->find();
           $info['content'] = json_decode($info['content']);
           $goods= Db::name('goods')->field('id,title')->select();
           $goods= array_column($goods,'title','id');
           $member = Db::name('member')->field('id ,account')->select();
           $members= array_column($member,'account','id');
           $this->assign('info',$info);
           $this->assign('goods',$goods);
           $this->assign('members',$members);
           return $this->fetch();
       }

       if($this->request->isAjax()){
           $up = $this->request->param();
          
           if(empty($up['data']['id']) || $up['data']['id']<=0 ){
               return false;
           }

           $res = Db::name('order')->where(['id'=>$up['data']['id']])->update(
               [
                'status'  =>$up['data']['status'],
                'orderback'=>$up['data']['callback'],
               ]
           );

           if($res){
               return json(['code'=>200,'msg'=>'操作成功']);
           }else{
               return json(['code'=>400,'msg'=>'操作失败']);
           }

       }

    }

    public function pdel()
    {
       $id = input('get.id','','int');
       if($id <=0 || empty($id)){
           return false;
       }
       $ret = Db::name('order')->where(['id'=>$id])->update(['is_delete'=>1]);
       if($ret){
           return json(['code'=>200,'msg'=>'删除成功']);
       }else {
           return json(['code'=>400,'msg'=>'删除失败']);
       }

    }
   

    /**
     * 补单
     * 未支付修改为支付
     */
     public function budan(){
         if($this->request->isGet()){
             $id = input('get.id','','int');
             if(empty($id) || is_null($id) || !isset($id) || $id<=0){
                 return false;
             }
             
             $res = Db::name('order')->where(['id'=>$id,'is_delete'=>0])->data(['dan'=>0])->update();
             
             if($res !== false){
                return  json(['code'=>200,'msg'=>'补单成功']);
             }else{
                return  json(['code'=>400,'msg'=>'补单失败']);
             }

         }
         return false;
     }

   
     /**
      * 充值记录
      */
      public function chong(){
          $order = input('get.keywords','','trim');
          if(empty($order) || !isset($order)){
              $w = [
               'del_time'=>null,
              ];

          }else {
            $w = [
              'member_no'=>$order,
              'del_time'=>null,
            ];
          }

          $list = Db::name('member_pay')->where($w)->order('create_time desc')->paginate(15);
          $member = Db::name('member')->field('id,account')->order('create_time desc')->select();
          $members = array_column($member,'account','id');
          $this->assign('members',$members);
          $this->assign('list',$list);
          return $this->fetch();
        }

        public function cedit(){
            if($this->request->isGet()){
               $id = input('get.id','','int');

               if(empty($id) || !isset($id) || $id <=0){
                 return false;
                }
                $member = Db::name('member')->field('id,account')->order('create_time desc')->select();
                $members = array_column($member,'account','id');
                $this->assign('members',$members);
                
                $info = Db::name('member_pay')->where(['id'=>$id,'del_time'=>null])->find();
                $this->assign('info',$info);
                return $this->fetch();
            }
            return false;
        }

      
      public function cdels(){
          if($this->request->isGet()){
              $id = input('get,id','','int');
              
              if(empty($id) || !isset($id) || $id <=0){
                  return false;
              }
             
             $res = Db::name('member_pay')->where(['id'=>$id])->data(['del_time'=>time()])->update(); 

             if($res !== false){
                 return json(['code'=>200,'msg'=>'删除成功']);
             }else{
                 return json(['code'=>400,'msg'=>'删除失败']);
             }
          }

          return  false;
      }  


/**
 * 去掉代充订单
 */


}