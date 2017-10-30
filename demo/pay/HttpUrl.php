<?php
/**

 c h
   modth
  status
  follow
  agent
  referer
  url
  error
    instance
    retry=0
    header

    h()
   post(data)
   follow()
   getStatus()
   agent($u)
   rerferer()
    header($data)
    file()
    cookie()
    retry($time)
    getError()

   submit(url)
 */
namespace Pay;
class HttpUrl{
    private $modth="get";
    private $status="";
    private $follow="";
    private $agent="";
    private $referer="";
    private $header=false;
    private $url="";
    private $timeout = 30;
    private $error="";
    private $data="";
    private $info="";
    private $returntransfer = true;
    private $response = "";
    private static $instance = null;

    public static function init(){
        if(self::$instance==null)
            self::$instance = new self;
        return self::$instance;
    }
    function post($data){
        $this->data= $data;
        $this->modth = "post";
        return $this;
    }
    function follow(){
        $this->follow = true;
        return $this;
    }
    function getInfo(){
        return $this->info;
    }
    function getStatus(){
        return $this->info['http_code'];
    }
    function agent($u){
        $this->agent = $u;
        return $this;
    }
    function referer($u){
        $this->referer = $u;
        return $this;
    }
    function header($data){

    }
    function file(){

    }
    function response(){
        return $this->response;
    }
    function cookie(){

    }
    function retry($time){
        $this->retry = $time;
        return $this;
    }
    function getError(){
        return $this->error;
    }
    function timeout($time){
        $this->timeout=$time;
        return $this;
    }

    function submit($url){

        $this->url = $url;
        $adb_handle = curl_init();

        $opt = [
            CURLOPT_URL=>$this->url,
            CURLOPT_HEADER=>$this->header,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_RETURNTRANSFER => $this->returntransfer
        ];

        if($this->modth=='post'){
            $opt[CURLOPT_POSTFIELDS] = $this->data;
        }


        curl_setopt_array($adb_handle,$opt);

        $this->response = curl_exec($adb_handle);

        $errno = curl_errno($adb_handle);

        $this->info = curl_getinfo($adb_handle);

        $this->error = $errno ? curl_error($adb_handle) : '';

        curl_close($adb_handle);

        if($this->error)   ;//write log

        return $this;
    }
}
$url = "http://product.co/aaa";
//echo HttpUrl::init()->submit($url)->response();
 $http = HttpUrl::init()->post(['pay_id'=>time()])->submit($url);
echo $http->response().PHP_EOL;
echo $http->getError().PHP_EOL;
echo $http->getStatus().PHP_EOL;
?>