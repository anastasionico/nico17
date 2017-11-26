<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'message' => $faker->sentence(),
        'email' => $faker->email(),
    ];
});
