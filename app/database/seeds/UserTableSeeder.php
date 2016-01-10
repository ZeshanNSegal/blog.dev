<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		$user->first_name = 'Zee';
		$user->last_name = 'Bee';
		$user->email = 'zee@bee.com';
		$user->password = Hash::make($_ENV['USER_PASS']);
		$user->username = 'ZeeBee';
		$user->save();
	}
}