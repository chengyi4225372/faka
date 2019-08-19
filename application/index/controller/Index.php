<?php
/**
 * 网站首页
 *
 */

namespace app\index\controller;

use think\Config;
use app\index\controller\Base;

class Index extends Base
{
    //首页
    public function index()
    {
        return $this->fetch();
    }
}