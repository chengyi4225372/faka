<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 20:54
 * 网站配置控制器
 */

namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;
class Wconfig extends Base
{
    public $table = 'content';

    //首页公告
    public function index()
    {
        if($this->request->isGet()){
            $id = 24;
            $info = Db::name($this->table)->where('id',$id)->find();
            $this->assign('info',$info);

            $id = 5;
            $infod = Db::name($this->table)->where('id',$id)->find();
            $this->assign('infod',$infod);


            $id = 20;
            $infoc = Db::name($this->table)->where('id',$id)->find();
            $this->assign('infoc',$infoc);

            $id = 21;
            $infoa = Db::name($this->table)->where('id',$id)->find();
            $this->assign('infoa',$infoa);

            //支付参数
            $pay = Db::name('pay')->where('id',7)->find();
            $this->assign('pay',$pay);

            return $this->fetch();
        }

        if($this->request->isPost()){
            $content = input('post.content');
            $id      = input('post.id');

            if(empty($id)|| $id == ''){

                $res = Db::name($this->table)->insertGetId(['content'=>$content]);
            }else {

                $res = Db::name($this->table)->where(['id'=>$id])->update(['content'=>$content]);
            }

            if($res){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else {
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }
    }  
    

    //兑换地址
    public function duihuan()
    {

        if($this->request->isPost()){
            $content = input('post.content');
            $id      = input('post.id');

            if(empty($id)|| $id == ''){

                $res = Db::name($this->table)->insertGetId(['content'=>$content]);
            }else {

                $res = Db::name($this->table)->where(['id'=>$id])->update(['content'=>$content]);
            }

            if($res){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else {
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }

    }


    //关于我们
    public function contact()
    {
        if($this->request->isPost()){
            $content = input('post.content');
            $id      = input('post.id');
            if(!isset($id) || empty($id)){
                $res = Db::name($this->table)->insertGetId(['content'=>$content]);
            }else {
                $res = Db::name($this->table)->where(['id'=>$id])->update(['content'=>$content]);
            }

            if($res){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else {
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }
    }
  
    
    //帮助中心 
    public function about()
    {
        if($this->request->isAjax()){
            $content = input('post.content');
            $id      = input('post.id');
            if(!isset($id) || empty($id)){
                $res = Db::name($this->table)->insertGetId(['content'=>$content]);
            }else {
                $res = Db::name($this->table)->where(['id'=>$id])->update(['content'=>$content]);
            }

            if($res){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else {
                return json(['code'=>400,'msg'=>'操作失败']);
            }
        }
    }


    //网站设置
    public function setconfig()
    {
      if($this->request->isGet()){
          $id   = '1';
          $info = Db::name('config')->where(['id'=>$id])->find();
          $this->assign('info',$info);
          return $this->fetch();
      }

      if($this->request->isAjax()){
          $this->param = $this->request->param();

          if(empty($this->param['dat']['id']) || $this->param['dat']['id'] <=0 ){
                $res = Db::name('config')->insert($this->param['dat']);
          }

          if(isset($this->param['dat']['id']) && $this->param['dat']['id']){
              $res = Db::name('config')->where(['id'=>$this->param['dat']['id']])->update(
                  [
                      'title'      =>$this->param['dat']['title'],
                      'modou'      =>$this->param['dat']['modou'],
                      'images'     =>$this->param['dat']['images'],
                      'logo'       =>$this->param['dat']['logo'],
                      'qcode'      =>$this->param['dat']['qcode'],
                      'miao'       =>$this->param['dat']['miao'],
                      'keywords'   =>$this->param['dat']['keywords'],
                      'kefu'       =>$this->param['dat']['kefu'],
                      'qq1'        =>$this->param['dat']['qq1'],
                      'qq2'        =>$this->param['dat']['qq2'],
                      'info'       =>$this->param['dat']['content'],
                      'high'       =>$this->param['dat']['high'],
                      'nomal'      =>$this->param['dat']['nomal'],
                  ]
              );

          }

          if($res){
              $this->result('','200','操作成功','json');
          }else{
              $this->result('','400','操作失败','json');
          }
      }


    }

    //上传
    public function UploadImg()
    {
        // 获取上传文件
        $file =$this->request->file('file');
        // 验证图片,并移动图片到框架目录下。
        $path = ROOT_PATH.'public/Upload/imgs/';
        $info = $file-> move($path);
        if($info){
            $mes = $info->getSaveName();
            $mes = str_replace("\\",'/',$mes);
            return json(['code'=>'200','msg'=>'上传成功','path'=>'/Upload/imgs/'.$mes]);
        }else{
            // 文件上传失败后的错误信息
            $mes = $file->getError();
            return json(['code'=>'400','msg'=>$mes]);
        }
    }

}