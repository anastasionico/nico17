<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\ProjectImage::class, function (Faker $faker) {
    return [
        'project_id' => function () {
            return factory(App\Project::class)->create()->id;
        },
		'img' => $faker->image('public/img/projects',400,300, null, false),
		'alt' => $faker->sentence
	];
});
