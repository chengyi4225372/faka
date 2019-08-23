<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 21:51
 */
//模板控制器

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use Think\Db;

class Motels extends Base
{

    public $table ='moban';


    public function index()
    {
        $keyword  = input('get.keywords','','trim');

        if(empty($keyword) || $keyword == ''){
            $list  = Db::name($this->table)->order(['sort'=>'desc','id'=>'desc'])->paginate(15);
        }

        if(!empty($keyword) || $keyword != ''){
            $list  = Db::name($this->table)
                     ->where(['title'=>['like','%'.$keyword.'%']])
                     ->order(['sort'=>'desc','id'=>'desc'])
                     ->paginate(15);
        }

        $this->assign('list',$list);

        return $this->fetch();
    }

    public function add()
    {
        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){

            $this->param = $this->request->param();

            $ret         = Db::name($this->table)->insert($this->param['data']);

            if($ret){
                $this->result('','200','操作成功','json');
            }else {
                $this->result('','404','操作失败','json');
            }
        }

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
            $this->param = $this->request->param();

            if(empty($this->param['data']['id'])||!isset($this->param['data']['id'])){
                return false;
            }

            $ret   = Db::name($this->table)
                         ->where(['id'=>$this->param['data']['id']])
                         ->update([
                              'title'   => $this->param['data']['title'],
                              'content' => $this->param['data']['content'],
                              'sort'    => $this->param['data']['sort'],
                             ]);

            if($ret){
                $this->result('','200','操作成功','json');
            }else {
                $this->result('','404','操作失败','json');
            }
        }

    }

    public function del()
    {
     $id  = input('get.id','','trim');

     if(!isset($id)|| empty($id)){
         return false;
     }

     $delete = Db::name($this->table)->where(['id'=>$id])->delete();

     if($delete){
         $this->success('删除成功！');
     }else {
         $this->error('删除失败！');
     }

    }
}