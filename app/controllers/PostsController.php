<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

		public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	public function index()
	{ 
		$query = Post::with('user');

		if (Input::has('search')) {
			$query->where('title', 'like', '%title%');
			$query->orWhere('body', 'like', '%body%');

			$query->orWhereHas('user', function($q) {
				$q->where('email', 'like', '%bee%');
			});
		}

		$posts = $query->paginate(4);
		// $posts = Post::with('user')->orderBy('updated_at', 'desc')->paginate(4);
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
		Log::info('The info was stored and logged.');
		// Log::warning('Something could be going wrong.', Input::all());
		// Log::error('Something is really going wrong.');
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
		if(!$post){
			App::abort(404);
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
				$post->user_id = User::first()->id;

				$result = $post->save();

				if($result){
					Session::flash('successMessage', 'Your post has been successfully saved.');
					return Redirect::action('PostsController@index');
				} else {
					return Redirect::back()->withInput();
				}	
			}	
	}
	
}
