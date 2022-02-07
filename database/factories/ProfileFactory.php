<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

// $factory->define(Profile::class, function (Faker $faker) {
//     return [
//         'user_id' => factory(App\User::class),
//         'name' =>  function () {
//             return factory(App\User::class)->create()->name;
//         },
//         'nickname' =>   function () {
//             return factory(App\User::class)->create()->name;
//         },
//         'age' => $faker->numberBetween(18,40),
//         'gender' => $faker->numberBetween(0,1),
//         'occupation' => $faker->numberBetween(1,4),
//         'prefectures' => $faker->randomElement([13,23]),
//         'alcohol' => $faker->numberBetween(1,4),
//         'count' => $faker->numberBetween(1,4),
//         'introduction' => $faker->text,
//     ];
// });
