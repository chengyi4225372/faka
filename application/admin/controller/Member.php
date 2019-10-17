<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 22:33
 * 用户管理控制器
 */
namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;

class Member extends Base
{

  public $table = 'member';

  public function index()
  {
       $keyword = input('get.keywords','','trim');

       if(empty($keyword) || $keyword == ''){
           $list = Db::name($this->table)->where('status',1)->order('id desc')->paginate(10);
       }

      if(!empty($keyword) || $keyword != ''){
          $list = Db::name($this->table)
              ->where(['account|email|qq'=>['like','%'.$keyword.'%']])
              ->where('status',1)
              ->order('id desc')->paginate(10);
      }

       $this->assign('list',$list);
       return $this->fetch();
  }

  public function edit()
  {
     if($this->request->isGet()){
         $id   = input('get.id','','trim');
         $info = Db::name($this->table)->where(['id'=>$id])->find();
         $this->assign('info',$info);
         return $this->fetch();
     }

     if($this->request->isPost()){

         $this->param =$this->request->param();

         if( $this->param['data']['id'] == '' || empty($this->param['data']['id'])){
             $res  = Db::name($this->table)->insert($this->param);
         }

         if(isset($this->param['data']['id']) && !empty($this->param['data']['id'])){
             $res  = Db::name($this->table)->where(['id'=>$this->param['data']['id']])->update([
                 'account' =>$this->param['data']['account'],
                 'email'   =>$this->param['data']['email'],
                 'qq'      =>$this->param['data']['qq'],
                 'status'  =>$this->param['data']['status'],
                 'money'   =>$this->param['data']['money'],
                 'level'   =>$this->param['data']['level'],
             ]);
         }

         if($res){
             $this->result('','200','操作成功','json');
         }else {
             $this->result('','404','操作失败','json');
         }

     }

  }

  public function del()
  {
      $id  = input('get.id','','trim');

      if(!isset($id) || empty($id)){
          return false;
      }

      $ret = Db::name($this->table)->where(['id'=>$id])->delete();
      if ($ret) {
         $this->success('删除成功！');
      }else {
         $this->error('删除失败');
      }
  }

  public function hei(){
      if($this->request->isGet()){
          $keyword = input('get.keywords','','trim');

          if(empty($keyword) || $keyword == ''){
              $list = Db::name($this->table)->where('status',0)->order('id desc')->paginate(10);
          }

          if(!empty($keyword) || $keyword != ''){
              $list = Db::name($this->table)
                  ->where(['account|email|qq'=>['like','%'.$keyword.'%']])
                  ->where('status',0)
                  ->order('id desc')
                  ->paginate(10);
          }

          $this->assign('list',$list);
          return $this->fetch();
      }

      if($this->request->isPost()){

      }
  }



}
