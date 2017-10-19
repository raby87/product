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

Route::get('/', function () {
    echo json_encode($_SERVER);die;
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
