<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\ProjectImage::class, function (Faker $faker) {
	$name = $faker->word;
    return [
        'project_id' => function () {
            return factory(App\Project::class)->create()->id;
        },
		// 'img' => $faker->image('public/img/projects',400,300, null, false),
		'img' => UploadedFile::fake()->image("$name.png", 600, 600),

		'alt' => $name,
	];
});
