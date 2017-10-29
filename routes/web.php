<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('aaa',function(){

    file_put_contents("test.log","逻辑处理".json_encode($_POST));
        echo json_encode(['msg'=>'充值成功'.json_encode($_POST)]); die;
    return 'Hello World';
});



Route::get('/', function () {
    $collection = collect([
        ['name' => 'a', 'price' => 200],
        ['name' => 'b', 'price' => 150],
        ['name' => 'a', 'price' => 100],
    ]);


    $sorted = $collection->groupBy(function($v,$k){
        echo "<pre />";
        var_dump($v);
        var_dump($k);
    })->toArray();

    echo json_encode($sorted);die;
    return view('welcome',['a'=>'b']);
});
Route::get('/admin/login', function () {
    return view('auth/login');
});
Route::get('/admin', function () {
    return view('admin/welcome');
});
Route::get('/admin/register', function () {
    return view('auth/register');
});
Route::get('/session', function () {
    $sid= session_id();
    if(empty($sid)){
        session_start();
        $sid= session_id();
    }

    echo 'sid:'.$sid.PHP_EOL;
    $_SESSION['a']='12';
    var_dump($_SESSION);

    $lifeTime = 5;
    echo session_id();
    setcookie(session_name(), session_id(), time() + $lifeTime, "/");
    return ;
    //return view('auth/register');
});


Route::get('/test', function () {
    session_start();
    echo session_name().PHP_EOL;
    echo session_id();
    var_dump($_SESSION);
    return ;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
