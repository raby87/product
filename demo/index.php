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
        $order_id = isset($_REQUEST['order_id']) ?$_REQUEST['order_id']: time();



        $pay_id = time();
        //写临时表(redis)   hash key pay:pay_id     value: order_id   设置过期时间,一周


        $rs = \Pay\Pay::driver($pay)->pay($pay_id);


        return $rs;
    }
    /**
     * @param $request
     */
    public function notify($request){
        $pay = $_POST['channel'] ?: 'Alipay.Web';

        //写日志  request_all()

        if(\Pay\Pay::driver($pay)->verify($request->all())){

            $pay_id = \Pay\Pay::driver($pay)->getPayID();

            //取临时表里的ID(redis),写数据库

            //
            $http = HttpUrl::init()->post([])->submit("http://");

            file_put_contents('test.log',$http->response());

            echo "ok";
        }else{

        }
    }
}
$a = new PayController();
echo $a->index();
?>