<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Wholeseller;
use Faker\Generator as Faker;

$factory->define(Wholeseller::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'ci'=>$faker->PhoneNumber,
        'phone'=>$faker->PhoneNumber
    ];
});
