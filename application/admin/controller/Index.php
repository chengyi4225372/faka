<?php
/**
 * 后台首页
 * @author yupoxiong <i@yufuping.com>
 */

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;

class Index extends Base
{
    public function index()
    {
        $html = @file_get_contents('https://www.956ka.cn/Notice.html');

        $zan  = @file_get_contents('https://www.956ka.cn/Sponsor.html');  //页面404

        $this->assign('zan',$zan);

        $this->assign('html',$html); 
        
        //会员
        $member = Db::name('member')->count();
        //昨天订单
        $zuo_order = Db::name('order')->where(['create_time'=>date("Y-m-d",strtotime("-1 day"))])->count();
        //今天订单
        $today     = Db::name('order')->where(['create_time'=>date("Y-m-d",time())])->count();
       //昨日订单金额
        $zuo_money = Db::name('order')
        ->where(['create_time'=>date("Y-m-d",strtotime("-1 day"))])
        ->where(['status'=>1])
        ->count('countpay');
       //今日金额
        $today_money= Db::name('order')
        ->where(['create_time'=>date("Y-m-d",time())])
        ->where(['status'=>1])
        ->count('countpay');
       //未发货订单总数
       

       $this->assign('member',$member);
       $this->assign('zuo_order',$zuo_order);
       $this->assign('today',$today);
       $this->assign('zuo_money',$zuo_money);
       $this->assign('today_money',$today_money);
       return $this->fetch();
    }

}