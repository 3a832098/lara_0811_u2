<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
//練習1
/*Route::get('/', function () { //設定Route回傳View
    return view('welcome');
});
Route::get('/', function () { //設定Route回傳字串
    return 'welcome';
});

Route::get('r1', function () { //設定Route跳轉路由
    return redirect('r2');
});

Route::get('r2', function () {
    return view('welcome123');
});*/
//練習2之一：設定Route接受參數
    Route::get('hello/{name}', function ($name) {
        return 'Hello, ' . $name;
    });
    Route::get('hello/{name?}', function($name = 'Everybody')
    {
        return 'Hello, '.$name;
    });
?>
