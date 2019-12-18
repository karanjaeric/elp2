<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactRelationship;
use Faker\Generator as Faker;

$factory->define(ContactRelationship::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
    ];
});
