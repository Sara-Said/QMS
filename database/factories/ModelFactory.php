<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt(str_random(10)),
        'is_admin' => $faker->boolean(),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Quize::class, function (Faker\Generator $faker) {
   
    return [
        'name' => $faker->word,
        'category_id' => $faker->numberBetween($min = 1, $max = 4),
        'time' => $faker->numberBetween($min = 1, $max = 4),
        'total_points' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 100), // 48.8932,
        'pass_points' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50.5, $max = 100),
    ];
});
