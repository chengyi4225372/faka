<?php
/**
 * 用户中心
 */

namespace app\index\controller;

use think\Config;
use think\Controller;
use app\index\controller\Base;

class User extends Base
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


}
