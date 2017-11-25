<?php

use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

$factory->define(App\Blogpost::class, function (Faker $faker) {
    $img = $faker->word;
    return [
    	'category_id' => function() { return factory(App\Blogcategory::class)->create()->id; },
    	'name' => $faker->word,
        'slug' => $faker->slug,
        'excerpt' => $faker->sentence(15),
        'content' => $faker->text(2000),
        'status' => $faker->numberBetween(1, 5),
        'order' => $faker->numberBetween(1, 50),
        'img' => UploadedFile::fake()->image("$img.jpg", 600, 600),
        'minutes_to_read' => $faker->numberBetween(1, 50),
        'cta_link' => $faker->url,
        'published_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
	];
});
