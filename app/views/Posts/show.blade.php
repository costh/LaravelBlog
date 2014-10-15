@extends('templates.default')

@section('content')

	<article>
		<h2> <a href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }}</a></h2>
			 {{ Markdown::parse($post->body) }}</p>
	</article>
	
@stop