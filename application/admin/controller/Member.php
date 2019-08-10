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

class Member extends Base
{
  public function index()
  {
      return $this->fetch();
  }

  public function edit()
  {
      return $this->fetch();
  }

  public function del()
  {
      return false;
  }

}
