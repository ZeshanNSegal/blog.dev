<?php

class PostTableSeeder extends Seeder {


	public function run()
	{
		$post1 = new Post;
			$post1->title='Title';
			$post1->body='body';
			$post1->user_id=1;
			$post1->save();

		$post2 = new Post;
			$post2->title='Title';
			$post2->body='body';
			$post2->user_id=1;
			$post2->save();

		$post3 = new Post;
			$post3->title='Title';
			$post3->body='body';
			$post3->user_id=1;
			$post3->save();

		$post4 = new Post;
			$post4->title='Title';
			$post4->body='body';
			$post4->user_id=1;
			$post4->save();
			
		$post5 = new Post;
			$post5->title='Title';
			$post5->body='body';
			$post5->user_id=1;
			$post5->save();	
	}

}
