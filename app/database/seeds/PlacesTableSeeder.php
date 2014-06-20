<?php

class PlacesTableSeeder extends Seeder {

	public function run()
	{
		Place::truncate();

		Place::create([
				'name' => 'Testowe miejsce',
				'address' => 'ul. dupa 56/12',
				'link' => 'http://www.dupeczka.com',
				'info' => 'godziny otwarcia: 8-17',
				'user_id' => '1'
			]);
	}

}
