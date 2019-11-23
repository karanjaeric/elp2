<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UniversityCategory;
use Faker\Generator as Faker;

$factory->define(UniversityCategory::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomLetter
    ];
});
