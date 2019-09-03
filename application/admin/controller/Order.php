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
        $paytype = input('get.paytype','','int');

        if(empty($gid) && empty($paytype)){
            $w = ['huo'=>0, 'is_delete'=>0];
        }

        if(!empty($gid) && !empty($paytype)){
            $w = ['huo'=>0,'is_delete'=>0,'gid'=>$gid,'paytype'=>$paytype];
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
        $paytype = input('get.paytype','','int');

        if(empty($gid) && empty($paytype)){
            $w = ['huo'=>1, 'is_delete'=>0];
        }

        if(!empty($gid) && !empty($paytype)){
            $w = ['huo'=>1,'is_delete'=>0,'gid'=>$gid,'paytype'=>$paytype];
        }


        $list   = Db::name('order')->where($w)->paginate(15);
        $goodes = Db::name('goods')->where('huo',1)->select();
        $goods  = array_column($goodes,'title','id');
        $member = Db::name('member')->field('id ,account')->select();
        $info   = array_column($member,'title','id');
        $this->assign('goods',$goods);
        $this->assign('goodes',$goodes);
        $this->assign('list',$list);
        $this->assign('info',$info);
        return $this->fetch();
    }

    public function pedit()
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
        return $this->fetch();
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

    //代充订单
    public function dorder()
    {
        return $this->fetch();
    }


    //充值记录
    public function chong()
    {
        return $this->fetch();
    }

    //补单
    public function overorder()
    {
        return  111;
    }
}