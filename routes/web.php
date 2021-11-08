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

Route::get('/', function () {
    return view('welcome');
});
//練習1
/*Route::get('/', function () { //設定Route回傳View
    return view('welcome');
});
Route::get('/', function () { //設定Route回傳字串
    return 'welcome';
});
*/
/*Route::get('r1', function () { //設定Route跳轉路由
    return redirect('r2');
});

Route::get('r2', function () {
    return view('welcome123');
});*/
//練習2之一：設定Route接受參數
/*Route::get('hello/{name}', function ($name) {
       return 'Hello, ' . $name;
   });*/
   Route::get('hello/{name?}', function($name = 'Everybody')
   {
       return 'Hello, '.$name;
   });
//練習三：新增路由
/*Route::get('hello/{name}', function ($name) {
       return 'Hello, ' . $name;
   });*/
//練習四 命名ROUTE
 /*    Route::get('hello/{name?}', function($name= 'Everybody')
        {
                return'Hello, ' .$name;
        }
     ) -> name('hello.index');*/
//練習五 設定ROUTE的前置
    /*Route::get('dashboard', function(){
        return 'dashboard';
    });
    Route::group(['prefix'=>'admin'], function(){
        Route::get('dashboard', function(){
            return 'admin dashboard';
        });
    });*/
//練習七 7-2
 /*   use App\Http\Controllers\HomeController;
    Route::get('home',[HomeController::class,'index'])-> name('home.index');*/


?>
