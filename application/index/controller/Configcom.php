<?php
/**
 * 网站配置
 */
namespace app\index\controller;

use think\Config;
use think\Controller;
use think\Db;
use app\index\controller\Base;

class Configcom extends Base
{
    public $table = 'content';

    //兑换地址
    public function address()
    {
        $info = Db::name($this->table)->where(['id'=>5])->find();
        $this->assign('info',$info);
        return $this->fetch();
    }

    //关于我们
    public function about()
    {
        $info = Db::name($this->table)->where(['id'=>20])->find();
        $this->assign('info',$info);
        return $this->fetch();
    }

    //帮助中心
    public function help()
    {
        $info = Db::name($this->table)->where(['id'=>21])->find();
        $this->assign('info',$info);
        return $this->fetch();
    }

}