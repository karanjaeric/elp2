<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SelectionCriteria;
use Faker\Generator as Faker;

$factory->define(SelectionCriteria::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName
    ];
});
