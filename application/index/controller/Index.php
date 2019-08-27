<?php
/**
 * 网站首页
 *
 */

namespace app\index\controller;

use think\Config;
use think\Db;
use app\index\controller\Base;

class Index extends Base
{
    //首页
    public function index()
    {
        if($this->request->isGet()){
            $list  = Db::name('goods')->where(['status'=>1])->select();
            $cates = Db::name('good_cates')->select();
            $categorys = array_column($cates,'title','id');
            $this->assign('categorys',$categorys);
            $this->assign('list',$list);
        }
        return $this->fetch();
    }

    //购买页面
    public function trade()
    {
        return $this->fetch();
    }
}