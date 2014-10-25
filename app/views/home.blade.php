@extends('templates.default')

@section('title')Home @stop

@section('content')

	@if($posts->count())
		@foreach($posts as $post)

			<article>
			<h2> <a href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }}</a></h2>
			<p> Published on {{ $post->created_at->format(' F jS \\a\\t H\\:ia') }}</p> 
			 {{ Markdown::parse(Str::limit($post->body,275)) }}</p>
			<a href="{{ URL::action('post-show', $post->slug) }}"> Read more &rarr;</a>
			</article>

		@endforeach
	@endif

@stop