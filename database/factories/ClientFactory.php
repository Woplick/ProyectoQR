<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'ci'=>$faker->PhoneNumber,
        'n_invoice'=>$faker->PhoneNumber
    ];
});
