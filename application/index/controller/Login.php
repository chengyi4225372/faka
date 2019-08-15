<?php
/**
 * 登录 注册
 */
namespace app\index\controller;

use think\Config;
use think\Controller;

class Login extends Controller
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
