<?php
/**
 * 网站首页
 *
 */

namespace app\index\controller;

use think\Config;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }


    
}