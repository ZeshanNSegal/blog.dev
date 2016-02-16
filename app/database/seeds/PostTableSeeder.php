<?php

class PostTableSeeder extends Seeder {


	public function run()
	{
		$user = User::firstOrFail();

		$post1 = new Post;
		$post1->title='Zee\'s first blog';
		$post1->body='This is a blog post about my time creating my personal website. It has been interesting.';
		$post1->user_id= $user->id;
		$post1->save();

		$post2 = new Post;
		$post2->title='What new language should I learn? ';
		$post2->body='there has been plenty of talk about Python and Ruby. I don\'t know which way to go. But, I think Javascript is where I am going to focus mos tof my practice.... for now.';
		$post2->user_id= $user->id;
		$post2->save();

		$post3 = new Post;
		$post3->title='Codeup is where this was created.';
		$post3->body='Codeup is where I spent the last 6 months developing my skills as a software engineer. Locate din the heart of San Antonio, it has helped a few hundred folks get into the coding world.';
		$post3->user_id= $user->id;
		$post3->save();

		$post4 = new Post;
		$post4->title='Practice, Practice, Practice';
		$post4->body='Practice makes perfect, right? Well I need to keep developing my skills. Upddating and changing my website as needed.';
		$post4->user_id= $user->id;
		$post4->save();
			
		$post5 = new Post;
		$post5->title='This is a blog post about my life.';
		$post5->body='Born and raised in DFW, I moved to Austin at 18 years old. I have loved it ever since. It is the only city I have ever called home.';
		$post5->user_id= $user->id;
		$post5->save();	
	}

}
