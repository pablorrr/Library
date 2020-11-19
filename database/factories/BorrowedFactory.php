<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Borrowed;
use Faker\Generator as Faker;

$factory->define(Borrowed::class, function (Faker $faker) {
    return [

        'id_borrower' => $faker->numberBetween(1,10),
        'id_book'=>$faker->numberBetween(1,10),
    ];
});
