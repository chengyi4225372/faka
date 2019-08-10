<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 21:51
 */
//模板控制器

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;

class Motels extends Base
{

    public function index()
    {
        return $this->fetch();
    }

    public function add()
    {
        return $this->fetch();
    }

    public function edit()
    {
        return $this->fetch();
    }
}