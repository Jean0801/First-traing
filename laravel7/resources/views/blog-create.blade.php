@extends('layout.blog-template')

@section('css')
<link rel="stylesheet" href="{{asset('css/blog-create.css') }}">
@endsection

@section('main')
	<main class="container">
		<form action="/blog/store" method="POST" enctype="multipart/form-data">
			@csrf
			{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

			<div class="row">
				<label for="title">文章標題：</label>
				<input type="text" name="title" id="title">
			</div>
			<div class="row">
				<label for="auther1">文章作者：</label>
				<input type="text" name="auther1" id="auther1">
			</div>
			<div class="row custom">
				<label for="content">文章內文：</label>
				<textarea name="content" id="content" cols="30" rows="8"></textarea>
			</div>
			<div class="row">
				<label for="sign">簽名檔上傳：</label>
				<input type="text"  name="sign" id="sign">
				{{-- <button type="button" class="btn btn-secondary">上傳</button> --}}
			</div>

			<div class="row btn">
				<a href="/blog" class="btn btn-danger">取消</a>
				<button type="submit" class="btn btn-primary">新增文章</button>
			</div>
		</form>
	</main>

	@endsection
