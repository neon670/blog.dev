<?php
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{

	/**
	*
	*fill db with user(s)
	*/

	public function run()
	{
	

		// $faker = Faker::create();

		// for($i = 1; $i <= 50; $i++ )
		// {

		// 	$user = new User();
		// 		$user->username = $faker->unique()->userName;
		// 		$user->email=  $faker->unique()->email;
		// 		$user->password = $faker->password;
		// 		$user->save();

			
		// }

		User::create([
			'username' => $_ENV['USER_NAME'],
			'password' => $_ENV['USER_PASS'],
			'email'    => 'noeey@me.com',
			]);


		$user1 			 = new User();
		$user1->username = $_ENV['DEFAULT_USER'];;
		$user1->email 	 = 'noee@me.com';
		$user1->password = $_ENV['DEFAULT_PASS'];
		$user1->save();


	}

}