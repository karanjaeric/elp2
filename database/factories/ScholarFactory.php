<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Scholar;
use Faker\Generator as Faker;

$factory->define(Scholar::class, function (Faker $faker) {
    return [
        'university_id'=>factory(\App\University::class),
        'course_id'=>factory(\App\Course::class),
        'pf_number'=>$faker->word,
        'name'=>$faker->firstName,
        'high_school_id'=>factory(\App\HighSchool::class),
        'gender_id'=>factory(\App\Gender::class),
        'mean_grade_id'=>factory(\App\MeanGrade::class),
        'elp_class_id'=>factory(\App\ElpClass::class),
        'selection_criteria_id'=>factory(\App\SelectionCriteria::class),
        'county_id'=>factory(\App\Country::class),
        'branch_id'=>factory(\App\Branch::class),
        'phone_number'=>$faker->phoneNumber,
        'email1'=>$faker->email,
        'email2'=>$faker->email,
        'family_contact'=>$faker->phoneNumber,
        'family_contact_relationship'=>$faker->word,
    ];
});
