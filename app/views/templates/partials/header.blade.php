<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title') | Blog</title>
	</head>

	<body>

		<h1> Haydens Awesome Blog </h1>

		<h3> Menu </h3>

		<ul>
		  <li><a href="{{URL::action('home')}}">Home</a></li>
		  <li><a href="{{URL::action('PostController@getView_newPost')}}">Add Post</a></li>
		</ul>
