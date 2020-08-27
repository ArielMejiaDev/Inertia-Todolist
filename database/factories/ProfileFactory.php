<?php

/** @var Factory $factory */

use App\Profile;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'profile_picture' => $faker->imageUrl(),
        'user_id' => factory(User::class),
    ];
});
