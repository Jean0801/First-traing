@extends('layout.blog-template')

@section('main')

<main class="container">
	<div class="function-area">
			<a href="/blog/create" class="btn btn-primary">新增貼文</a>
		</div>
		<div id="message">
			@foreach ($articles as $article )
				{{-- <div>{{$article->title}}</div> --}}

				<div class="message-card">
					<div class="msg-info">
						<div class="title">{{$article->title}}</div>
						<div class="auther">{{$article->auther1}}</div>
						<div class="post-time">{{$article->created_at}}</div>
						<a href="/blog/edit/{{$article->id}}" class="edit">編輯</a>
						<a href="/blog/destroy/{{$article->id}}" class="destroy">刪除</a>
					</div>
					<div class="msg-content">{{$article->content}}</div>
				</div>
				@endforeach
			</div><br>

		{{-- <div id="message">
			<div class="message-card">
				<div class="msg-info">
					<div class="title">{{$article->title}}</div>
					<div class="auther">{{$article->auther1}}</div>
					<div class="post-time">{{$article->created_at}}</div>
				</div>
				<div class="msg-content">{{$article->content}}
				</div>
			</div>
		</div><br>

		<div id="message">
			<div class="message-card">
				<div class="msg-info">
					<div class="title">{{$article->title}}</div>
					<div class="auther">{{$article->auther1}}</div>
					<div class="post-time">{{$article->created_at}}</div>
				</div>
				<div class="msg-content">{{$article->content}}
				</div>
			</div>
		</div><br> --}}
	</main>
	@endsection
