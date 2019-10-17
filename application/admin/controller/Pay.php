<?php
namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;

class Pay extends Base
{
    protected  $table = 'pay';

    public function index(){
        if($this->request->isGet()){
         $info = Db::name($this->table)->where('id',7)->find();
         $this->assign('info',$info);
         return $this->fetch();
        }

        if($this->request->isPost()){


            $id   = input('post.id','','int');
            $pid  = input('post.pid','','int');
            $url  = input('post.url','','trim');
            $key  = input('post.key','','trim');

            if(empty($id) || $id <= 0){
                return false;
            }

            $res = Db::name($this->table)->where('id',$id)->update(['pid'=>$pid,'url'=>$url,'key'=>$key]);

           if($res !==false){
               return json(['code'=>200,'msg'=>'操作成功']);
           }else {
               return json(['code'=>200,'msg'=>'操作失败']);
           }
        }
    }



}