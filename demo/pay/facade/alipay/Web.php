<?php

/**
 * Created by PhpStorm.
 * User: raby
 * Date: 17/10/23
 * Time: 下午3:57
 */
namespace Pay\facade\alipay;

class Web extends  Alipay
{
    private $config = "";
    public function __construct($config=""){
        $this->config = $config;
    }

    public function pay($order_id=""){
        $this->config['rmb_fee'] = $_REQUEST['money'];
        $this->config['outer_trade_no'] = $order_id;

        parent::pay($this->config);
        return $this->buildHtml();
    }
}