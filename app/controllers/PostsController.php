<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{ 
		$posts = Post::orderBy('updated_at', 'desc')->paginate(4);
		return View::make('posts.index')->with('posts', $posts);	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idOrTitle)
	{
		if (is_numeric($idOrTitle)){
			$post = Post::find($idOrTitle);
		}else{
			$idOrTitle = str_replace("-", " ", $idOrTitle);
			$post = Post::where('title', '=', $idOrTitle)->first();
		}

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

			$post = Post::find($id);
			return $this->validateAndSave($post);
	}

	public function __construct()
	{
    	// require csrf token for all post, delete, and put actions
    	$this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));
	}


	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::action('PostsController@index');
	}

	protected function validateAndSave($post)
	{
		// create the validator
	    	$validator = Validator::make(Input::all(), Post::$rules);

	   		 // attempt validation
	    	if ($validator->fails()) {
	    		// validation failed, redirect to the post create page with validation errors and old inputs
	    		return Redirect::back()->withInput()->withErrors($validator);
	    	} else {
	        // validation succeeded, create and save the post

				$post->title = Input::get('title');
				$post->body = Input::get('body');
				$post->user_id = 1;

				$result = $post->save();

				if($result){
					return Redirect::action('PostsController@index');
				} else {
					return Redirect::back()->withInput();
				}	
			}	
	}

}
