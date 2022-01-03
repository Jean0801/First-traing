<?php

use Illuminate\Support\Facades\DB;
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
    return view('index');
});

Route::get('/news', 'FrontController@newsIndex');
Route::get('/products', 'FrontController@productsIndex');


// 根據請求，對應到相對的controller

// Route::get('/page','NewsController@index');

// Route::get('/blog',function(){
//     return view('blog');
// });

// Route::get('/blog-create',function(){
//     return view('blog-create');
// });
// (R：讀取)檢視(列表')
Route::get('/blog', 'BlogController@index');

// (C：新增)新增一篇文章，create是叫出新增的頁面，store是將資料存入資料庫中的操作
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog/store', 'BlogController@store');

// (U：更新)laravel的路由中，可以利用{}花括弧 去將網址的特定區段轉換成變數，編輯/刪除
Route::get('/blog/edit/{id}', 'BlogController@edit');
Route::POST('/blog/update/{id}', 'BlogController@update');

// (D：刪除)刪除
Route::get('/blog/destroy/{id}', 'BlogController@destroy');
