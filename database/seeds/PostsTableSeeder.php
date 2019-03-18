<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		App\User::inRandomOrder()->limit(5)->get()->each(function($user){
			$user->posts()->save(factory(App\Post::class)->make());
		});
	}
}
