<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence,
        'creation_time' => $faker->dateTime,
        'like' => rand(0, 10)
    ];
});
