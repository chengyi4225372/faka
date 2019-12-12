<?php
namespace app\index\controller;

use think\Config;
use think\Controller;
use think\Db;
class Mobile extends Controller
{

    //手机端控制
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        if(!isMobile()){
            $this->redirect('index/index');
        }

        $config = Db::name('config')->where(['id'=>1])->find();
        $shouye = Db::name('content')->where(['id'=>24])->find();
        $this->assign('config',$config);
        $this->assign('shouye',$shouye);
    }

    //主页
    public function index()
    {
       if($this->request->isGet()){
           $list   = Db::name('goods')->where(['status'=>1])->order('sort desc')->select();
           $cates  = Db::name('good_cates')->order('id desc')->select();
           $indexs = Db::name('content')->where(['id'=>24])->find();
           $categorys = array_column($cates,'title','id');
           //商品库存
           $num = Db::name('card')->field('gid,count(kami) as num')->where(['over'=>0])->group('gid')->select();

           foreach ($list as $k =>$val){
               if(!is_array($num) || empty($num)){
                   $list[$k]['num'] = null;
               }

               if(is_array($num) && !empty($num)){
                   foreach($num as $key =>$v){
                       if($list[$k]['huo'] == 0 && $list[$k]['id'] == $v['gid']){
                           $list[$k]['num'] = $v['num'];
                       }
                   }
               }

               if($list[$k]['huo'] == 1){
                   $list[$k]['num'] = '人工发货';
               }
           }

           $this->assign('list',$list);
           $this->assign('categorys',$categorys);
           $this->assign('indexs',$indexs);
           return $this->fetch();
       }
    }

    //详情
    public function trade(){
        if($this->request->isGet()){
            $id = input('get.id','','int');

            if(empty($id) || $id <=0){
                return false;
            }

            $info  = Db::name('goods')->where('id',$id)->find();
            //卡密
            $num  = Db::name('card')->where(['gid'=>$id,'over'=>0])->count('kami');
            $info['num'] = $num;
            //模板
            if($info['rengong'] == 0 || $info['rengong'] == ''){
                $info['moban'] = 0;
            }
            if($info['rengong'] != '' || $info['rengong'] != 0){
                $moban = Db::name('moban')->field('content')->where(['id'=>$info['rengong']])->find();
                $info['moban'] = explode('**',$moban['content']);
                foreach ($info['moban'] as $i =>$val){
                    $info['moban'][$i] = explode('-',  $info['moban'][$i]);
                }
            }
            $this->assign('info',$info);
            return $this->fetch();
        }
        return false;
    }

    //支付
    public function buy()
    {
       if($this->request->isGet()){

       }

       if($this->request->isPost()){

       }

       return false;
    }

    //搜索
    public function search()
    {
        return $this->fetch();
    }

    /**搜索详情**/
    public function orderinfo()
    {
        return $this->fetch();
    }

    /***手动发货 ***/
    public function sdfahuo()
    {
        return $this->fetch();
    }

   /*** 自动发货 ***/
    public function zdfahuo()
    {
        return $this->fetch();
    }

}