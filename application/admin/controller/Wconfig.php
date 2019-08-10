<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 20:54
 * 网站配置控制器
 */

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;

class Wconfig extends Base
{

    //首页公告
    public function index()
    {
        return $this->fetch();
    }  
    

    //兑换地址
    public function duihuan()
    {
        return $this->fetch();
    }


    //关于我们
    public function contact()
    {
        return $this->fetch();
    }
  
    
    //帮助中心 
    public function about()
    {
        return $this->fetch();
    }

}