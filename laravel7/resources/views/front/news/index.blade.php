@extends('layout.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('./css/blog.css') }}">
    <style>
        h2{
            text-align: center;
            padding: 20px 0px;
            margin: 0px;
        }
    </style>
@endsection

@section('main')
    <main class="container">
        <h2>最新消息</h2>
        <div id="message">
            @foreach ($articles as $article)
                <div class="message-card">
                    <div class="msg-info">
                        <a href="/news/content/{{$article->id}}">{{ $article->title }}</a>
                        {{-- <div class="title" >{{ $article->title }}</div> --}}
                        <div class="auther">{{ $article->auther1 }}</div>
                        <div class="post-time">{{ $article->created_at }}</div>
                    </div>
                    <div class="msg-content">{{ $article->content }}</div>
                </div>
            @endforeach
        </div><br>
    </main>
@endsection

@section('js')

@endsection
