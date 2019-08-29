<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10 0010
 * Time: 23:23
 * 商品控制器
 */
namespace app\admin\controller;

use Parsedown;
use tools\Sysinfo;
use think\Db;
use think\View;

class Goods extends Base
{

    //商品类型
    public function cates()
    {
       if($this->request->isGet()){
           $keywords = input('get.keywords','','trim');
           $keywords ? $keywords :'';

           if(!empty($keywords)){
               $list     = Db::name('good_cates')->where(['title'=>$keywords])->order('id desc')->paginate(15);
           }else {
               $list     = Db::name('good_cates')->order('id desc')->paginate(15);
           }

           $this->assign('list',$list);
           return $this->fetch();
       }

       if($this->request->isAjax()){
           $id    = input('post.id','','int');
           $title = input('post.title','','trim');


           if(empty($id) || $id == ''){
               $res = Db::name('good_cates')->insert(['title'=>$title]);
           }

           if(!empty($id) && isset($id)){
               $res = Db::name('good_cates')->where(['id'=>$id])->update(['title'=>$title]);
           }
       }

        if($res){
            $this->result('','200','操作成功','json');
        }else {
            $this->result('','404','操作失败','json');
        }

    }

    public function addc(){
        if($this->request->isGet()){
             $id = input('get.id','','trim');
             if(!empty($id) || !isset($id)){
              $info = Db::name('good_cates')->where(['id'=>$id])->find();
              $this->assign('info',$info);
             }
        }
        return $this->fetch();
    }


    public function delc()
    {
        if($this->request->isGet()){
            $id  = input('get.id','','int');
            $res = Db::name('good_cates')->where(['id'=>$id])->delete();

            if($res){
                $this->success('操作成功');
            }else {
                $this->error('操作失败');
            }
        }
    }

    //当前分类下产品
    public function nodes()
    {
      if($this->request->isGet()){
          $cid  = trim(input('get.id','','int'));
          $list = Db::name('goods')->where(['cid'=>$cid])->paginate(15);
          $cates= Db::name('good_cates')->order('id desc')->select();
          $category = array_column($cates,'title','id');
          $this->assign('cates',$cates);
          $this->assign('category',$category);
          $this->assign('list',$list);
      }

        return $this->fetch();
    }


    //商品列表
    public function glist()
    {
      if($this->request->isGet()){
          $keywords = input('get.keywords','','trim');
          if(!isset($keywords) || !empty($keywords)){
              $list = Db::name('goods')->where(['title'=>$keywords])->order('sort desc,id desc')->paginate(15);
          }else {
              $list = Db::name('goods')->order('sort desc ,id desc')->paginate(15);
          }
          $cates    = Db::name('good_cates')->select();
          $category = array_column($cates,'title','id');
          $this->assign('category',$category);
          $this->assign('list',$list);
      }
        return $this->fetch();
    }

    public function addg()
    {
      if($this->request->isGet()){
          $id    = input('get.id','','int');
          $info  = Db::name('goods')->where(['id'=>$id])->find();
          $cates = Db::name('good_cates')->order('id desc')->select();
          $moban = Db::name('moban')->order('sort desc')->select();
          $this->assign('info',$info);
          $this->assign('cates',$cates);
          $this->assign('moban',$moban);
          return $this->fetch();
      }


      if($this->request->isAjax()){
          $this->param = $this->request->param();

          //add
          if(empty($this->param['dat']['id']) || $this->param['dat']['id']<=0 ){
              $res = Db::name('goods')->insert($this->param['dat']);
          }

          //edit
          if(!empty($this->param['dat']['id']) && isset($this->param['dat']['id'])){

              $res = Db::name('goods')->where(['id'=>$this->param['dat']['id']])->update(
                  ['title'     =>$this->param['dat']['title'],
                   'sort'      =>$this->param['dat']['sort'],
                   'images'    =>$this->param['dat']['images'],
                   'money'     =>$this->param['dat']['money'],
                   'content'   =>$this->param['dat']['content'],
                   'huo'       =>$this->param['dat']['huo'],
                   'cid'       =>$this->param['dat']['cid'],
                   'paynum'    =>$this->param['dat']['paynum'],
                   'rengong'   =>$this->param['dat']['rengong'],
                   'nomal'     =>$this->param['dat']['nomal'],
                   'high'      =>$this->param['dat']['high'],
                   'maxs'      =>$this->param['dat']['maxs'],
                   'mins'      =>$this->param['dat']['mins'],
                   'bei'       =>$this->param['dat']['bei'],
                   'pipay'     =>$this->param['dat']['pipay'],
                   'pinum'     =>$this->param['dat']['pinum'],
                 ]);
          }

          if($res){
              $this->result('','200','操作成功','json');
          }else{
              $this->result('','400','操作失败','json');
          }

      }

    }


    public function delg()
    {
     if($this->request->isGet()){
         $id = input('get.id','','int');

         if($id <= 0 || empty($id)){
             return false;
         }

         if($id){

             $res = Db::name('goods')->where(['id'=>$id])->delete();

             if($res){
                 $this->success('删除成功');
             }else{
                 $this->error('删除失败');
             }
         }
       }

    }


    //商品 上架状态
    public function jiag()
    {
       if($this->request->isAjax()){
           $this->param = $this->request->param();
           $id = $this->param['id'];
           $status = $this->param['data'];

           if(empty($id)|| !isset($id)){
               return false;
           }

           if(!empty($id) && isset($id)){
               $ret = Db::name('goods')->where(['id'=>$id])->update(['status'=>$status?'0':'1']);
           }

           if($ret){
               $this->result('','200','操作成功','json');
           }else{
               $this->result('','400','操作失败','json');
           }

       }
    }

    //商品排序
    public function setSort()
    {
      if($this->request->isAjax()){
          $id   = input('post.id','','int');

          if(empty($id) || $id<=0){
              return false;
          }

          $sort = input('post.zhi','','trim');
          $ret  = Db::name('goods')->where(['id'=>$id])->update(['sort'=>$sort]);

          if($ret){
              return json(['code'=>200,'msg'=>'操作成功']);
          }else{
              return json(['code'=>400,'msg'=>'操作失败']);
          }
      }
    }


    //卡密
    public function klist()
    {
       if($this->request->isGet()){
           $list  = Db::name('card')->order('id desc')->paginate(15);
           $goods = Db::name('goods')->field('id,title')->where('huo',1)->select();
           $goods = array_column($goods,'title','id');
           $this->assign('goods',$goods);
           $this->assign('list',$list);
           return $this->fetch();
       }
    }

    public function addk()
    {
      if($this->request->isGet()){
          $goods = Db::name('goods')->field('id,title')->where(['huo'=>1])->order('id desc')->select();
          $this->assign('goods',$goods);

          $id   = input('get.id','','int');
          $info = Db::name('card')->where(['id'=>$id])->find();
          $this->assign('info',$info);
          return $this->fetch();
      }

      if($this->request->isAjax()){
          $this->param = $this->request->param();
            if($this->param['dats']['status']==1) {
              $kami = explode("\n",$this->param['dats']['content']);
              $kami = array_unique($kami);
            }

            if($this->param['dats']['status']==0) {
               $kami = explode("\n",$this->param['dats']['content']);
            }

              $arr  = [];
              foreach ($kami as $k =>$val){
                  $arr[] = ['kami'=>$val,'gid'=>$this->param['dats']['gid'],'status'=>$this->param['dats']['status']];
              }

            $ret = Db::name('card')->insertAll($arr);

           if($ret){
               return json(['code'=>'200','msg'=>'操作成功']);
           }else{
               return json(['code'=>'400','msg'=>'操作失败']);
           }
      }

    }

    public function delk()
    {
        if($this->request->isGet()){
            $id = input('get.id','','int');
            if($id <= 0 || empty($id)){
                return false;
            }
            if(!empty($id) && $id>0){
                $ret = Db::name('card')->where(['id'=>$id])->delete();
                if($ret){
                    $this->success('删除成功');
                }else {
                    $this->error('删除失败');
                }
            }
        }
    }


    //导出卡密列表
    public function dklist()
    {
       if($this->request->isGet()){
           $cates = Db::name('good_cates')->field('id,title')->order('id desc')->select();
           $this->assign('cates',$cates);
           return $this->fetch();
       }

       if($this->request->isAjax()){
           $result = $this->request->param();

           if($result['data']['kid'] == '0'){
               $w['gid']   = $result['data']['gid'];
           }

           if($result['data']['kid'] == '1'){
               $w = [
                   'gid'=>$result['data']['gid'],
                   'over'=>0,
               ];
           }

           if($result['data']['kid'] =='2'){
               $w = [
                   'gid'=>$result['data']['gid'],
                   'over'=>1,
               ];
           }

           $card = Db::name('card')->field('kami')->where($w)->select();



           $path  = ROOT_PATH.'public/txt/'.time('Y-m-d');
           if(!file_exists($path)){
               mkdir($path,0777,true);
           }

           foreach ($card as $k =>$v){
               file_put_contents($path.'/kami.txt',$v['kami'].PHP_EOL,FILE_APPEND);
           }

           Db::startTrans();
           try{
               //判断导出类型
               if($result['data']['status']== 1){
                   Db::name('card')->where(['gid'=>$result['data']['id']])->delete();
               }
                $id = Db::name('dcard')->insertGetId([
                     'cid'=>$result['data']['cid'],
                     'gid'=>$result['data']['gid'],
                     'kid'=>$result['data']['kid'],
                     'status'=>$result['data']['status'],
                     'path'  =>$path.'/kami.txt',
                 ]);

               // 提交事务
               Db::commit();
               return json(['code'=>200,'msg'=>'导出成功,请下载id='.$id]);

           } catch (\Exception $e) {
               // 回滚事务
               Db::rollback();
               return json(['code'=>400,'msg'=>'操作失败']);
           }
       }
       return true;
    }

   //下载卡密
    public function downloads()
    {

    }


    //删除卡密
    public function delkm()
    {

    }


    //二级联动
    public function twoselect()
    {
        if($this->request->isAjax()){
            $id   = input('get.id','','trim');
            $list = Db::name('goods')->field('id,title')->where(['cid'=>$id,'huo'=>1])->select();
            $list?$list:'';
            return json($list);
        }
    }


    //上传图片
    public function uploads_img()
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