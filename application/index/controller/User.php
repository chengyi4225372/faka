<?php
/**
 * 用户中心
 */

namespace app\index\controller;

use think\Config;
use think\Controller;
use app\index\controller\Base;
use think\Request;
use think\Session;
use think\Db;


class User extends Base
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->is_login();
    }

    //会员中心
    public function index()
    {
        return $this->fetch();
    }

    //我的订单
    public function myorder()
    {
        return $this->fetch();
    }

    //充值中心
    public function recharge()
    {
        return $this->fetch();
    }

    public function mychongzi()
    {
        return $this->fetch();
    }

    //开通代理
    public function vip()
    {
        return $this->fetch();
    }

    //修改密码
    public function editpwd()
    {
        if($this->request->isGet()){
            return $this->fetch();
        }

        if($this->request->isPost()){
            $pwd = $this->request->param();
            $info  = Session::get('info');
            $ret = Db::name('member')->where(['id'=>$info['id']])->find();
            if($ret['password'] != md5(md5($pwd['data']['oldpwd']).$ret['rand'])){
                return json(['code'=>400,'msg'=>'原始密码输入不对']);
            }

            if($ret['password'] == md5(md5($pwd['data']['oldpwd']).$ret['rand'])){
                $result = Db::name('member')->where(['id'=>$info['id']])->update(
                    [
                   'password'=>md5(md5($pwd['data']['newpwd']).$ret['rand'])
                   ]);
                if($result){
                    return json(['code'=>200,'msg'=>'操作成功']);
                }else {
                    return json(['code'=>500,'msg'=>'操作失败']);
                }

            }

        }

    }


}
