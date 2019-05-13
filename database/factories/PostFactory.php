<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	return [
		'title' => $faker->realText(50),
		'content' => $faker->realText(5000),
	];
});
