<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();

		User::create([
				'username' => 'Michał',
				'login' => 'Michal',
				'password' => '1234'
			]);

		User::create([
				'username' => 'Łucja',
				'login' => 'Lucja',
				'password' => '12345'
			]);
	}

}
