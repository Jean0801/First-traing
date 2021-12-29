<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // 連動到articles這張資料表
    protected $table = 'articles';

    // 白名單，允許articles這張資料表中，能夠被存取的欄位
    protected $fillable = ['id', 'title', 'content', 'auther1'];
}
