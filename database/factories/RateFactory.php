<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rate;
use Faker\Generator as Faker;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        'rate' => $faker->randomFloat(2, 10, 100),
        'room_type' => $faker->title,
        'description' => $faker->realText(200),
    ];
});
