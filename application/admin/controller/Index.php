<?php
/**
 * 后台首页
 * @author yupoxiong <i@yufuping.com>
 */

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;

class Index extends Base
{
    public function index()
    {
        $html   = file_get_contents('https://www.956ka.cn/Notice.html');

        $zan  = file_get_contents('https://www.956ka.cn/Sponsor.html');  //页面404

        $this->assign('zan',$zan);

        $this->assign('html',$html);

        return $this->fetch();
    }

}