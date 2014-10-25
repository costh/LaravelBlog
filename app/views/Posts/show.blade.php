@extends('templates.default')

@section('title'){{ $post->title }} @stop

@section('content')

	<article>
		<h2> <a href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }}</a></h2>
			 <p> Published on {{ $post->created_at->format(' F jS \\a\\t H\\:ia') }}</p>
			 {{ Markdown::parse($post->body) }}</p>

	</article>
	
@stop