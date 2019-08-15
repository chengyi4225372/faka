<?php
/**
 * 用户中心
 */

namespace app\index\controller;

use think\Config;
use think\Controller;

class User extends Controller
{
    //会员中心
    public function index()
    {
        return $this->fetch();
    }

    //我的订单
    public function myorder()
    {
        return $this->fetch();
    }

    //充值中心
    public function recharge()
    {
        return $this->fetch();
    }

    public function mychongzi()
    {
        return $this->fetch();
    }

    //开通代理
    public function vip()
    {
        return $this->fetch();
    }

    //修改密码
    public function editpwd()
    {
        return $this->fetch();
    }

    //注销
    public function lout()
    {
        return '未完成';
    }
}
