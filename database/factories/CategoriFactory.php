<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Categori\Categori;
use Faker\Generator as Faker;

$factory->define(Categori::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name_categori' => $word,
    ];
});
