<?php
/**
 * Created by PhpStorm.
 * User: raby
 * Date: 17/10/23
 * Time: 下午3:57
 */
namespace Pay\facade\alipay;

use Pay\c\pay;

abstract Class Alipay implements pay
{
    public function pay($str=""){
        
    }
    public function notify(){

    }
    public function close(){

    }
    public function find($order_id=""){

    }
    public function verify(){

    }
    public function refund(){

    }
    public function buildHtml(){
        echo "buildHTML";
    }

}