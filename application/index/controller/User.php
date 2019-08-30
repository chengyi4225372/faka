<?php
/**
 * 用户中心
 */

namespace app\index\controller;

use think\Config;
use think\Controller;
use app\index\controller\Base;
use think\Request;


class User extends Base
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->is_login();
    }

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
