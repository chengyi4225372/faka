<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 23:23
 * 商品控制器
 */
namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;

class Goods extends Base
{

    //商品类型
    public function cates()
    {
       if($this->request->isGet()){
           $keywords = input('get.keywords','','trim');
           $keywords ? $keywords :'';

           if(!empty($keywords)){
               $list     = Db::name('good_cates')->where(['title'=>$keywords])->order('id desc')->paginate(15);
           }else {
               $list     = Db::name('good_cates')->order('id desc')->paginate(15);
           }

           $this->assign('list',$list);
           return $this->fetch();
       }

       if($this->request->isAjax()){
           $id    = input('post.id','','int');
           $title = input('post.title','','trim');


           if(empty($id) || $id == ''){
               $res = Db::name('good_cates')->insert(['title'=>$title]);
           }

           if(!empty($id) && isset($id)){
               $res = Db::name('good_cates')->where(['id'=>$id])->update(['title'=>$title]);
           }
       }

        if($res){
            $this->result('','200','操作成功','json');
        }else {
            $this->result('','404','操作失败','json');
        }

    }

    public function addc(){
        if($this->request->isGet()){
             $id = input('get.id','','trim');
             if(!empty($id) || !isset($id)){
              $info = Db::name('good_cates')->where(['id'=>$id])->find();
              $this->assign('info',$info);
             }
        }
        return $this->fetch();
    }


    public function delc()
    {
        if($this->request->isGet()){
            $id  = input('get.id','','int');
            $res = Db::name('good_cates')->where(['id'=>$id])->delete();

            if($res){
                $this->success('操作成功');
            }else {
                $this->error('操作失败');
            }
        }
    }



    //商品列表
    public function glist()
    {
     return $this->fetch();
    }

    public function addg()
    {
        return $this->fetch();
    }

    public function statusg()
    {
        return false;
    }

    public function klist()
    {
        return $this->fetch();
    }

    public function addk()
    {
        return $this->fetch();
    }

    //当前分类下产品
    public function nodes()
    {
        return '未完成';
    }


    //导出卡密
    public function exportk()
    {
        return false;
    }
}