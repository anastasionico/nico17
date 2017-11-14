<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\BlogSupercategory::class, function (Faker $faker) {
    $img = $faker->word;
    return [
        'name' => $faker->word,
        'slug' => $faker->slug,
        'excerpt' => $faker->sentence(10),
        'img' => UploadedFile::fake()->image("$img.png", 600, 600),

    ];
});
