<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Borrower;
use Faker\Generator as Faker;

$factory->define(Borrower::class, function (Faker $faker) {
    return [
        'imie' => $faker->firstNameFemale,
        'nazwisko' => $faker->lastName,
    ];
});
