<?php
namespace app\index\controller;

use think\Controller;
use pay\lib\AlipaySubmit;
use pay\lib\AlipayNotify;
use think\Db;
class Pays extends Controller
{

    protected  $pay = 'pay';

    //支付参数
    protected  $alipay_config=array();

    protected  $error= '支付数据为空';

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub

        $pay = Db::name($this->pay)->order('id desc')->find();

        if (empty($pay)) {
           return  $this->error;
        }

       $this->alipay_config = array(
        'partner'=> $pay['pid'],
        'key'=> $pay['key'],
        'sign_type' => strtoupper('MD5'),
        'input_charset' => strtolower('utf-8'),
        'transport'=> 'http',
        'apiurl' => $pay['url'],
       );

    }

    //请求支付
    public function index(){
            $pay = Db::name($this->pay)->order('id desc')->find();
            $out_trade_no = input('get.order_no','','trim');
            $type = input('get.types','','trim');
            $name = input('get.goodnames','','trim');
            $money = input('get.paynum');
            $sitename = input('get.sitename','','trim');

            //构造要请求的参数数组，无需改动
            $parameter = array(
                "pid" =>$pay['pid'],
                "type" => $type,
                "notify_url"	=>"http://".$_SERVER['HTTP_HOST']."/index/pays/notify_url",
                "return_url"	=>"http://".$_SERVER['HTTP_HOST']."/index/pays/return_url",
                "out_trade_no"	=> $out_trade_no,
                "name"	=> $name,
                "money"	=> $money,
                "sitename"	=> $sitename,
            );


            //建立请求
            $alipaySubmit = new AlipaySubmit($this->alipay_config);
            $html_text = $alipaySubmit->buildRequestForm($parameter);

            echo $html_text;
    }


    //同步
    public function return_url(){
        $alipayNotify = new AlipayNotify($this->alipay_config);
        $verify_result = $alipayNotify->verifyReturn();

        if($verify_result) {//验证成功
            //商户订单号
            $out_trade_no = $_GET['out_trade_no'];
            //支付宝交易号
           // $trade_no = $_GET['trade_no'];
            //交易状态
            $trade_status = $_GET['trade_status'];
            //支付方式
           // $type = $_GET['type'];

            if($trade_status == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //如果有做过处理，不执行商户的业务程序
               $res = Db::name('order')->where(['order_no'=>$out_trade_no])->find();

               if($res['huo'] == 1){

                   Db::startTrans();
                   try{
                      //购买的秘钥
                      $list = Db::name('card')->where(['gid'=>$res['id'],'over'=>0])->order('id desc')->limit(0,$res['num'])->select();

                      //取出的秘钥需要修改状态 todo

                       // 提交事务
                       Db::commit();
                   } catch (\Exception $e) {
                       // 回滚事务
                       Db::rollback();
                   }

               }


            } else {
                //echo "trade_status=".$_GET['trade_status'];
                echo "支付失败！";
            }
           //  echo "验证成功<br />";
           //跳转到发货页面
           if($res['huo'] ==1){
               return $this->redirect('index/sdfahuo');
           }
           if($res['huo'] ==0){
               return $this->redirect('index/zdfahuo');
           }


        } else {
            echo "验证失败";
        }
    }


    //异步
    public function notify_url(){
        $alipayNotify = new AlipayNotify($this->alipay_config);
        $verify_result = $alipayNotify->verifyNotify();

        if($verify_result) {//验证成功
            $out_trade_no = $_GET['out_trade_no'];
            $trade_no = $_GET['trade_no'];
            $trade_status = $_GET['trade_status'];
            $type = $_GET['type'];
            if ($trade_status == 'TRADE_SUCCESS') {

               //查询改订单是否已经支付
               $order = Db::name('order')->field('id,status')->where(['order_no'=>$out_trade_no])->find();
               if($order['status'] ==1){
                   echo "<script>alert('该订单已经支付')</script>";
                   exit();
               }


                Db::startTrans();
                try{
                    //更新订单表
                    Db::name('order')->where(['order_no'=>$out_trade_no])->update(
                        [
                            'type'=>$type,
                            'status'=>2,
                            'trade_no' =>$trade_no,
                        ]
                    );

                    // 提交事务
                    Db::commit();
                } catch (\Exception $e) {
                    // 回滚事务
                    Db::rollback();
                }

            }
            echo "success";		//请不要修改或删除
        }
        else {
            //验证失败
            echo "fail";
        }
    }




}