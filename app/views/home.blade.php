@extends('templates.default')

@section('content')

	@if($posts->count())
		@foreach($posts as $post)

			<article>
			<h2> <a href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }}</a></h2>
			 {{ Markdown::parse(Str::limit($post->body,275)) }}</p>
			<a href="{{ URL::action('post-show', $post->slug) }}"> Read more &rarr;</a>
			</article>

		@endforeach
	@endif

@stop