<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\University;
use Faker\Generator as Faker;

$factory->define(University::class, function (Faker $faker) {
    return [
        'university_category_id'=>factory(\App\UniversityCategory::class),
        'country_id'=>factory(\App\Country::class),
        'name'=>$faker->randomLetter,


    ];
});
