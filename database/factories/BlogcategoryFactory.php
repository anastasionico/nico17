<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\Blogcategory::class, function (Faker $faker) {
    $img = $faker->word;
    return [
    	'supercat_id' => function() { return factory(App\Blogsupercategory::class)->create()->id; },
    	'name' => $faker->word,
        'slug' => $faker->slug,
        'excerpt' => $faker->sentence(15),
        'img' => UploadedFile::fake()->image("$img.png", 600, 600),
	];
});
