<?php
namespace app\index\controller;

use think\Config;
use think\Controller;


class Base extends Controller
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        if(isMobile()){
           $this->redirect('mobile/index');
        }
        $this->is_login();
    }


    /**
     * 检测用户是否登录
     */
    public function is_login()
    {
     return true;
    }

}