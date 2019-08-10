<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 23:23
 * 商品控制器
 */
namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;

class Goods extends Base
{

    //商品类型
    public function cates()
    {
        return $this->fetch();
    }

    public function addc(){
        return $this->fetch();
    }


    //商品列表
    public function glist()
    {
     return $this->fetch();
    }

    public function addg()
    {
        return $this->fetch();
    }

    public function klist()
    {
        return $this->fetch();
    }

    public function addk()
    {
        return $this->fetch();
    }

    //导出卡密
    public function exportk()
    {
        return false;
    }
}