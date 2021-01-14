<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'author' => $faker->lastName,
        'title' => $faker->company,

    ];
});
