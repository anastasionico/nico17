<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
    	'description' => $faker->paragraph,
    	'category' => $faker->sentence,
    	'priority' => rand(1,5),
    	'done' => 0,
    ];
});




