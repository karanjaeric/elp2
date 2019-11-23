<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ElpClass;
use Faker\Generator as Faker;

$factory->define(ElpClass::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName,
        'description'=>$faker->sentence
    ];
});
