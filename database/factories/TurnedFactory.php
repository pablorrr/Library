<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Turned;
use Faker\Generator as Faker;

$factory->define(Turned::class, function (Faker $faker) {
    return [
        'id_borrower' => $faker->numberBetween(1,10),
        'id_borrowed'=>$faker->numberBetween(1,10),
    ];
});
