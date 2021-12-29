<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //建立一個涵式
    public function index(){

        // dd('你找到專員了!!');
        // 建構DB 拿取資料表
        $articles = DB::table('articles')->get();

        // dd($articles);

        return view('page', compact('articles'));
    }

}
