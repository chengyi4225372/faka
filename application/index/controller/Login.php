<?php
/**
 * 登录 注册
 */
namespace app\index\controller;

use think\Config;
use think\Controller;
use think\Db;
use app\index\controller\Base;

class Login extends Base
{
    public function login()
    {
        return $this->fetch();
    }


    public function reg()
    {
      return $this->fetch();
    }
}
