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
        return $this->fetch();
    }  
    

    //兑换地址
    public function duihuan()
    {
        if($this->request->isGet()){
            $id = 5;
            $info = Db::name($this->table)->where('id',$id)->find();
            $this->assign('info',$info);

            return $this->fetch();
        }

        if($this->request->isAjax()){
            $content = input('post.content');
            $id      = input('post.id');
            if(isset($id) || empty($id)){
                $res = Db::name($this->table)->insertGetId(['content'=>$content]);
            }else {
                $res = Db::name($this->table)->where(['id'=>$id])->save(['content'=>$content]);
            }

            if($res && !empty($res)){
                $this->result($res,'200','操作成功','json');
            }
        }

    }


    //关于我们
    public function contact()
    {
        return $this->fetch();
    }
  
    
    //帮助中心 
    public function about()
    {
        return $this->fetch();
    }

}