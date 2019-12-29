<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/29 0029
 * Time: 17:54
 */
namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;

class Leveluser extends Base
{

    public $table = 'level_pay';

    public function index()
    {
        $keyword = input('get.keywords','','trim');

        if(empty($keyword) || $keyword == ''){
            $list = Db::name($this->table)->where('is_del',1)->order('id desc')->paginate(10);
        }

        if(!empty($keyword) || $keyword != ''){
            $list = Db::name($this->table)
                ->where(['order'=>$keyword])
                ->where('is_del',1)
                ->order('id desc')->paginate(10);
        }
        $member = Db::name('member')->select();
        $members= array_column($member,'account','id');
        $this->assign('list',$list);
        $this->assign('members',$members);
        return $this->fetch();
    }

    public function edit()
    {
        if($this->request->isGet()){
            $id   = input('get.id','','trim');
            $info = Db::name($this->table)->where(['id'=>$id])->find();
            $this->assign('info',$info);
            $member = Db::name('member')->select();
            $members= array_column($member,'account','id');
            $this->assign('members',$members);
            return $this->fetch();
        }
        return false;
    }

    public function del()
    {
        $id  = input('get.id','','trim');

        if(!isset($id) || empty($id)){
            return false;
        }

        $ret = Db::name($this->table)->where(['id'=>$id])->data(['is_del'=>0])->update();
        if ($ret) {
           return json(['code'=>200,'msg'=>'删除成功']);
        }else {
            return json(['code'=>400,'msg'=>'删除失败']);
        }
    }


}