<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'country_code'=>$faker->countryCode,
        'name'=>$faker->country,
        'dial_code'=>$faker->countryISOAlpha3,
    ];
});
