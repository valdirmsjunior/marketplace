<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Loja::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'telefone' => $faker->phonenumber,
        'celular' => $faker->phonenumber, // password
        'slug' => $faker->slug,
    ];
});
