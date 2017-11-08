<?php

use Illuminate\Http\UploadedFile;
use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\ProjectImage::class, function (Faker $faker) {
    return [
        'project_id' => function () {
            return factory(App\Project::class)->create()->id;
        },
		// 'img' => $faker->image('public/img/projects',400,300, null, false),
		'img' => UploadedFile::fake()->image('file.png', 600, 600),

		'alt' => $faker->sentence
	];
});
