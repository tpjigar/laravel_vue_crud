<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Phone;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'uniquecode' => $faker->regexify('[A-Za-z0-9]{32}'),
        'name' => $faker->regexify('[0-9]{10}'),
        'customer_id' => random_int(1, 20)
    ];
});
