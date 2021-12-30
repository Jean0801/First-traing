<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function newsIndex()
    {
        $articles = Article::get();
        return view('front.news.index', compact('articles'));
    }

    public function productsIndex()
    {
        return view('front.products.index');
    }
}
