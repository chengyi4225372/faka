<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use pay;
use pay\return_url;
use pay\notify_url;

class Pays extends Controller
{

    public function return_url(){

    }


    public function notify_url(){
        dump(2222);
        exit();
    }

}