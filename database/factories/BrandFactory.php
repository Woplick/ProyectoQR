<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'brand'=>$faker->word,
        'description'=>$faker->sentence
    ];
});
