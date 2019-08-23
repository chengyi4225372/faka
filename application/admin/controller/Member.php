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
      $list = Db::name($this->table)->order('id desc')->paginate(10);
      $this->assign('list',$list);
      return $this->fetch();
  }

  public function edit()
  {
      return $this->fetch();
  }

  public function del()
  {
      $id  = input('get.id','','trim');
      $ret = Db::name($this->table)->where(['id'=>$id])->delete();
      if ($ret) {
         $this->success('删除成功！');
      }else {
        $this->error('删除失败');
      }
  }

}
