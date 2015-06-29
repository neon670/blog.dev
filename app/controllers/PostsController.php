<?php

class PostsController extends \BaseController {


	public function __construct()
	{
		$this->beforeFilter('auth', ['except' => ['index', 'show']]);
		parent::__construct();
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$posts = Post::paginate(10);
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
		$post->user_id = Auth::id();
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

		try{
			$post = Post::findOrFail($id);
			$data = array (
				'post'=>$post
				);
			return View::make('posts.edit')->with($data);
		} catch (Exception $e) {
			$data = array(
				'error' => $e->getMessage()
				);
			return View::make('errors.exceptions')->with($data);
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		if($validator->fails()){
			// return ' woh oh';
			Session::flash('errorMessage','Update failed. See error message.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->slug = Input::get('title');
		$post->save();
		Session::flash('successMessage','Update successful.');
		return Redirect::to('/posts');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage','Post successfully deleted.');
		return Redirect::action('PostsController@index');
	}


}
