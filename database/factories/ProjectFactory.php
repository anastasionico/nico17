<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Project::class, function (Faker $faker) {
    
    return [
        'name' => $faker->word,
        'slug' => $faker->slug,
        'content' => $faker->text,
        'img' => $faker->imageUrl(250,350),
        'cta_link' => $faker->url,
        'excerpt' => $faker->sentence,
        'seo' => $faker->boolean,
        'ecommerce' => $faker->boolean,
        'responsive' => $faker->boolean,
        'social_marketing' => $faker->boolean,
        'host_support' => $faker->boolean,
    ];
});
