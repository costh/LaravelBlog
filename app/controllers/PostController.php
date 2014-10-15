<?php

class PostController extends BaseController
{
	public function getShow($slug){
		$post = Post::where('slug','=',$slug)->firstOrFail();

		return View::make('posts.show')->with('post',$post);
	}
}