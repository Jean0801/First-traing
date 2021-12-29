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
    return view('welcome');
});

Route::get('/page', function() {
    // 變數宣告 使用 $ 字號開頭
    $title = '我是標題資料';
    $text = '我是內容';

    $articles = DB::table('articles')->get();
    // dd($lists[0]->title);
    

    return view('page', compact('articles'));
});
