<?php
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder{

	/**
	*
	*fill db with post(s)
	*/
	public function run()
		{
			
			$faker = Faker::create();

			for( $i = 1; $i <= 100; $i++){
				$user = User::all()->random();

			$post = new Post();
				$post->title = $faker->catchPhrase;
				$post->body = $faker->paragraph($nbSentences = 3);
				$post->slug = $faker->slug;
				$post->user_id = $user->id;
				$post->save();

			
			
			// $post 			= new Post();
			// $post->title 	= 'this is title' . $i;
			// $post->body 	= 'body body body body';
			// $post->slug 	= 'post' . $i;
			// $post->user_id	= 1;
			// // $user1->password = $_ENV['USER_PASS'];
			// $post->save();
		}
	}
}