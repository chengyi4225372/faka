<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 23:17
 * 订单控制器
 */

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;

class Order extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    //补单
    public function overorder()
    {
     return  111;
    }


    public function del()
    {
      return false;
    }


    //人工发货
    public function person()
    {
        return $this->fetch();
    }


    //充值记录
    public function chong()
    {
    return $this->fetch();
    }
}