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
use Think\Db;

class Order extends Base
{  
    public $table = 'order';
    //自动发货
    public function index()
    {
        $list = Db::name($this->table)->where(['huo'=>0])->paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function zedit()
    {
        return $this->fetch();
    }

    public function zdel()
    {
        return true;
    }

    //补单
    public function overorder()
    {
     return  111;
    }

    //人工发货
    public function person()
    {
        $list = Db::name($this->table)->where(['huo'=>1])->paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function pedit()
    {
        return $this->fetch();
    }

    public function pdel()
    {
        return true;
    }

    //代充订单
    public function dorder()
    {
        return $this->fetch();
    }


    //充值记录
    public function chong()
    {
        return $this->fetch();
    }
}