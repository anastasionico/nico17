<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\Blogsupercategory::class, function (Faker $faker) {
    $img = $faker->word;
    return [
        'name' => $faker->word,
        'slug' => $faker->slug,
        'excerpt' => $faker->sentence(15),
        'img' => UploadedFile::fake()->image("$img.png", 600, 600),
	];
});
