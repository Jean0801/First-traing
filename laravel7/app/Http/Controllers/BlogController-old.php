<?php

namespace App\Http\Controllers;

use App\Article;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


class BlogController extends Controller
{
    //讀取資料的總頁面通常會叫 index / list
    public function index(){
        $articles = Article::get();
        // $articles = DB:: table('articles')->get(); 尚未使用modle的寫法，不建議
        // dd($articles);

        // 叫出resorcurces.views資料夾下的blog.blade.php這隻頁面
        return view('blog', compact('articles'));

    }

    public function create(){

        return view('blog-create');
    }

    public function store(Request $request){
        // dd('我成功進來了!!', $request->all());

        // 如果表單的資料與request完全相符，可以用create($request->all) 直接建立
        // DB::table('articles')->insert($request->all);

        // 直接使用 DB 操作資料庫
        // DB::table('articles')->insert([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'auther1' => $request->auther,
        //     'created_at' => \Carbon\Carbon::now(),
        //     'updated_at' => \Carbon\Carbon::now(),
        // ]);

        // 藉由 model 操作資料庫
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'auther1' => $request->auther,
        ]);

        // 將chrome的網址列，重新導回127.0.0.1:8000/blog，這個網址
        return redirect('/blog');

        // 在有建立Model的情況下，並且有設置fillable白名單，就可以使用create的方式新增資料
        // $requestData = $request->all();
        // Blog::create($requestData);
        // return redirect('/blog');
    }
    public function edit($id){

        // 要抓 要編輯 的 那頁資料，並且回傳至編輯頁讓使用者編輯
        // Article::where()->get();

        // 找到我要編輯的那筆文章(資料ID)
        $article = Article::find($id);

        return view('blog-edit', compact('article'));
    }


    public function update($id, Request $request){

        // 要抓 要編輯 的 那頁資料，並且回傳至編輯頁讓使用者編輯後"儲存"
        // 第一種寫法 使用query builder

        // Article::find($id)->update([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'auther1' => $request->auther,
        // ]);

        // 第二個寫法，使用 orm
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->auther1 = $request->auther;
        $article->save();

        return redirect('/blog');
    }


    public function delete($id){
        // dd('我選到第'.$id.'筆資料');
        // 開始 進行 刪除

        // 第一種寫法 使用query builder
        // Article::find($id)->delete();

        // 第二個寫法，使用 orm
        $article = Article::find($id);
        $article->delete();


        // $article = Article::destroy($id);
        // 刪除完回到列表
        return redirect('/blog');

    }
}
