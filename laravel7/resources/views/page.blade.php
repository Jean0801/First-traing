@extends('layouts.template')

@section('content')
    {{-- $a = 0;
        dump 輸出內容為 拋出的訊息
        dump($a);

        echo 輸出會成為 html 結構的一部分
        echo $a;

        php下的dd(Dump and Die)函數 會中斷當前的程式 並拋出訊息
        dd($a); --}}

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">這是blade內寫死的資料</h1>
            <p class="lead">
                輕輕的我走了，
                正如我輕輕的來；
                我輕輕的招手，
                作別西天的雲彩。
                <br>
                那河畔的金柳，
                是夕陽中的新娘；
                波光里的艷影，
                在我的心頭蕩漾。
            </p>
            <p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a>
            </p>
        </div>
    </div>

    {{-- 要從資料庫->資料表->資料，放入的地方 --}}
    <div class="container">
        <div class="row">
            {{-- 把資料表中的每一筆資料取出來 --}}
            @foreach ($articles as $article)
                <div class="col-md-4">
                    {{-- 資料中的「欄位名稱」，放入該放的div中 --}}
                    {{-- 比如JS的「鍵key：值value」，要取得value，選到key就可以了
                    "name":"benjamin"
                    "title":綠營趁勝急推竹竹併
                    "text":...... --}}
                    <h2>{{$article->title}}</h2>
                    <p>{{$article->text}}</p>
                    <button type="button" class="btn btn-secondary mb-5">View details »</button>
                </div>
            @endforeach

        </div>
    </div>
@endsection
