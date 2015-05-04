<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	// public function index()
	// {
	// 	// return 'Output list of all posts';
	// 	$posts = Post::all();
	// 	$data = array(
	// 		'posts' => $posts
	// 		);
	// 	return View::make('post.index')->with($data);
	// }

	public function index()
	{
		$posts = Post::paginate(4);
		$data = array(
			'posts' => $posts
			);
   		
    	return View::make('post.index')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('post.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		
    // create the validator
    $validator = Validator::make(Input::all(), Post::$rules);

    // attempt validation
    if ($validator->fails()) {
  
         // validation failed, redirect to the post create page with validation errors and old inputs
        return Redirect::back()->withInput()->withErrors($validator);
    } else {
        $post = new Post;
		$post->title =  Input::get('title');
		$post->body =  Input::get('body');
		$post->slug = Input::get('title');
		$post->user_id = 1;
		$post->save();
		return Redirect::to('/post');
    }
}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// return "show post id: $id";
		try {

			if(is_numeric($id)) {
				$post = Post::findOrFail($id);
			}else{
				$slug = $id;
				$post = Post::where('slug', '=', $slug)->firstOrFail();
		}
		// dd($post);
			$data = array(
				'post' => $post
			);

		return View::make('post.show')->with($data);

	}   catch(Exception $e){
		Log::error($e);
		App::abort(404);
	}
	
}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		return View::make("edit");
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Update post with $id";
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "deleted post $id";
	}


}
