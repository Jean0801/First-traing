<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // 設定這個model 是連結到哪個資料表
    protected $table = 'articles';

    // model 的白名單寫法，只有寫在裡面的欄位 可以被寫入資料
    protected $fillable = [
        'title', 'content', 'auther1',
    ];

    // model 的黑名單寫法，除了寫在裡面的欄位外，其他都可以寫入資料
    // protected $guarded = [
    //     'id', 'created_at', 'updated_at',
    // ];

    // 通常黑名單與白名單只會擇一使用，不會一起出現，目的都是為了防止不想被動的資料被隨意串改
}
