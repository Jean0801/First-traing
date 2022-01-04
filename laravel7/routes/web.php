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
Route::get('test', function ()
{
    return view('front.products.content');
});
// 前台首頁
Route::get('/', function () {
    return view('index');
});

// 前台最新消息
Route::get('/news', 'FrontController@newsIndex');
Route::get('/news/content/{id}', 'FrontController@newsContent');

// 前台所有商品
Route::get('/products', 'FrontController@productsIndex');
Route::get('/products/content/{id}', 'FrontController@productsContent');

// blog相關
Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog/store', 'BlogController@store');
Route::get('/blog/edit/{id}', 'BlogController@edit');
Route::POST('/blog/update/{id}', 'BlogController@update');
Route::get('/blog/destroy/{id}', 'BlogController@destroy');
