<?php

use Faker\Generator as Faker;

$factory->define(App\Warranty::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'category' => $faker->lastName,
        'brand' => 'Apple',
        'cost' => $faker->randomNumber($nbDigits = 4, $strict = false),
        'dateOfPurchase' => now(),
        'placeOfPurchase' => $faker->streetName,
        'serialNumber' => str_random(10),
    ];
});
