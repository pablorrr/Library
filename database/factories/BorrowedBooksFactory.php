<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\BorrowedBooks;

$factory->define(BorrowedBooks::class, function (Faker $faker) {

        return [
            'id' =>  $faker->numberBetween(1, 5),
            'user_id' =>1,
            'book_id'=> $faker->numberBetween(3, 5)
        ];

});
