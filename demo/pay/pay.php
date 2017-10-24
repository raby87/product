<?php
namespace Pay;

class Pay{
    private static $channel = null;
    private function __construct(){

    }
    public static function driver($str=""){
        try{
            //alipay
            $config = [];

            $strArr = explode('.',$str);

            $gateway = __NAMESPACE__.'\\facade\\'.$strArr[0].'\\'.$strArr[1];


            self::$channel = new $gateway($config);
            return self::$channel;
        }catch (Exception $e){

        }
    }
}
?>