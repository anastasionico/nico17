<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Project::class, function (Faker $faker) {
    $img = $faker->word;
    return [
        'name' => $faker->word,
        'slug' => $faker->slug,
        'content' => $faker->text(2000),
        'img' => UploadedFile::fake()->image("$img.png", 600, 600),
        'cta_link' => $faker->url,
        'excerpt' => $faker->sentence(10),
        'seo' => $faker->boolean,
        'ecommerce' => $faker->boolean,
        'responsive' => $faker->boolean,
        'social_marketing' => $faker->boolean,
        'host_support' => $faker->boolean,
    ];
});
