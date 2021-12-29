@extends('layout.blog-template')

@section('css')
<link rel="stylesheet" href="{{asset('css/blog-create.css') }}">
@endsection

@section('main')
	<main class="container">
		<form action="/blog/update/{{$article->id}}" method="POST">
			@csrf
			{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

			<div class="row">
				<label for="title">文章標題：</label>
				<input type="text" name="title" id="title" value="{{$article->title}}">
			</div>
			<div class="row">
				<label for="auther">文章作者：</label>
				<input type="text" name="auther" id="auther" value="{{$article->auther1}}">
			</div>
			<div class="row custom">
				<label for="content">文章內文：</label>
				<textarea name="content" id="content" cols="30" rows="8">{{$article->content}}</textarea>
			</div>

			<div class="row btn">
				<a href="/blog" class="btn btn-danger">取消</a>
				<button type="submit" class="btn btn-primary">編輯文章</button>
			</div>
		</form>
	</main>

	@endsection
