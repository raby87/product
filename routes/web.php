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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
