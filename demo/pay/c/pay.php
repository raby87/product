<?php
/**
 * Created by PhpStorm.
 * User: raby
 * Date: 17/10/23
 * Time: 下午3:55
 */
namespace Pay\c;

interface pay{
    /**
     * 付款
     * @param string $config
     * @return mixed
     */
    public function pay($config="");

    /**
     * 通知
     * @return mixed
     */
    public function notify();

    /**
     * @return mixed
     */
    public function close();

    /**
     * @return mixed
     */
    public function find($order_id="");

    /**
     * 验名,认证
     * @return mixed
     */
    public function verify();

    /**
     * 退款
     * @return mixed
     */
    public function refund();
}
