<?php

require_once 'vendor/autoload.php';

class PayController
{
    /**
     * post/get :  金额,充值方式  ['money','alipay.web']
     * @return mixed
     */
    public function index(){
        $pay = isset($_REQUEST['channel']) ?$_REQUEST['channel']: 'alipay.Web';

        $order_id = time();
        $rs = \Pay\Pay::driver($pay)->pay($order_id);
        return $rs;
    }
    /**
     * @param $request
     */
    public function notify($request){
        $pay = $_POST['channel'] ?: 'Alipay.Web';

        if(\Pay\Pay::driver($pay)->verify($request->all())){

            echo "ok";
        }else{

        }
    }
}
$a = new PayController();
echo $a->index();
?>