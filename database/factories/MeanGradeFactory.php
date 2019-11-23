<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MeanGrade;
use Faker\Generator as Faker;

$factory->define(MeanGrade::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomLetter,
        'description'=>$faker->sentence,
    ];
});
