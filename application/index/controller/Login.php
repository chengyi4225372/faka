<?php
/**
 * 登录 注册
 */
namespace app\index\controller;

use think\Config;
use think\Controller;
use app\index\controller\Base;
use think\Db;
use think\Session;
class Login extends Base
{
    public $table = 'member';

    public function login()
    {
        if($this->request->isGet()){
            //如果已经登录
            if(session('info')){
                $this->redirect('user/index');
            }else {
                return $this->fetch();
            }
        }

        if($this->request->isPost()){
          $account = input('post.account','','trim');
          $pwd     = input('post.pwd','','trim');

          $name = Db::name($this->table)->where(['account'=>$account])->whereOr(['email'=>$account])->find();


          if(!$name || empty($name)){
              $this->result('','403','用户名不存在','json');
          }

          if($name['status'] == '0'){
              $this->result('','500','该用户禁止登录，请联系客服','json');
          }

          if($name['password'] !== md5(md5($pwd).$name['rand'])){
                $this->result('','405','密码错误','json');
            }

          if($name && $name['password'] === md5(md5($pwd).$name['rand'])){
               Session::set('info',$name);
               $this->result('','200','登录成功','json');
          }

        }
    }


    public function reg()
    {
     if($this->request->isGet()){
         return $this->fetch();
     }

     if($this->request->isAjax()){
         $email   = input('post.email','','trim');
         $user    = input('post.user','','trim');
         $pwd     = input('post.pwd','','trim');
         $qq      = input('post.qq','','trim');
         $captcha = input('post.captcha');
         $rand    = uniqid();
         if(!captcha_check($captcha)){
             $this->result('','401','验证码错误','json');
         }



         $array = array(
           'email'    =>$email,
           'account'  =>$user,
           'password' =>md5(md5($pwd).$rand),
           'qq'       =>$qq,
           'rand'     =>$rand,
         );

         $ret  = Db::name($this->table)->insert($array);
         if($ret){
             $this->result('','200','注册成功','json');
         }else {
             $this->result('','405','注册失败','json');
         }
     }

    }

    //检测用户名
    public function check_name()
    {
     $account = input('post.account','','trim');

     $res     = Db::name($this->table)->where(['account'=>$account])->find();

     if($res  || !empty($res)){
        $this->result('','404','用户名已经注册，请更换一个','json');
     }

     if(empty($res)){
        $this->result('','200','用户可以使用','json');
     }

    }

    //注销
    public function lout()
    {
        Session::delete('info');
        return  $this->redirect('index/index');
    }


}
