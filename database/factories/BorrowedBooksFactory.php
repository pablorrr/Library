<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\BorrowedBooks;

$factory->define(BorrowedBooks::class, function (Faker $faker) {

        return [
            'amount' => $faker->numberBetween(3, 5)
        ];

});
