<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {

    $avatarKey = random_int(1, 20);

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'avatar' => "https://placeholdit.projects.linwise.com/v2?dimension=100x100&category=cats&key=$avatarKey"
    ];
});
