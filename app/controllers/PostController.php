<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getShow($slug){
		$post = Post::where('slug','=',$slug)->firstOrFail();

		return View::make('posts.show')->with('post',$post);
	}

	public function getView_newPost(){
		return View::make('posts.make');
	}

	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), array(
				'title' => 'required',
				'body' => 'required|min:5'
			));

		if ($validator->passes()) {
			$post = new Post;
            $post->title = Input::get('title');
            $post->draft = Input::get('type');
            $post->slug = Slugify::slugify(Input::get('title'));
            $post->body =  Input::get('body');
            
            if($post->save()){
            	return \Redirect::to('/newpost')
							->with('message', 'Post was saved successfully');
            }

        }else{
        	Redirect::to('/newpost')->withErrors($validator);
        }
            return \Redirect::to('/newpost')
							->with('message', 'Your post could not be saved.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
