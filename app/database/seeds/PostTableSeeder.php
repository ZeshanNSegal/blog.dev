<?php

class PostTableSeeder extends Seeder {


	public function run()
	{
		$user = User::firstOrFail();

		$post1 = new Post;
		$post1->title='Title';
		$post1->body='body';
		$post1->user_id= $user->id;
		$post1->save();

		$post2 = new Post;
		$post2->title='Title';
		$post2->body='body';
		$post1->user_id= $user->id
		$post2->save();

		$post3 = new Post;
		$post3->title='Title';
		$post3->body='body';
		$post1->user_id= $user->id
		$post3->save();

		$post4 = new Post;
		$post4->title='Title';
		$post4->body='body';
		$post1->user_id= $user->id
		$post4->save();
			
		$post5 = new Post;
		$post5->title='Title';
		$post5->body='body';
		$post1->user_id= $user->id
		$post5->save();	
	}

}
