<?php
namespace app\index\controller;

use think\Config;
use think\Controller;

class Configcom extends Controller
{

   //兑换地址
    public function address()
    {
     return $this->fetch();
    }

    //关于我们
    public function about()
    {
        return $this->fetch();
    }

    //帮助中心
    public function help()
    {
        return $this->fetch();
    }

}