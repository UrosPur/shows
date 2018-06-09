<?php

use Faker\Generator as Faker;
use App\Show;

$factory->define(Show::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(10),
        'director' => $faker->name,
        'imgUrl' => $faker->imageUrl(),
        'duration' => $faker->numberBetween(60, $max = 240),
        'realiseDate' => $faker->date('Y-m-d','now'),
        'genre' =>  $faker->randomElement(['action', 'drama', 'comedy']),
    ];
});
