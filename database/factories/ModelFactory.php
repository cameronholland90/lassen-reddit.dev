<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
	return [
		'title' => $faker->words(6, true),
		'url' => $faker->url,
		'content' => $faker->paragraphs(3, true),
		'created_by' => App\User::all()->random()->id,
	];
});