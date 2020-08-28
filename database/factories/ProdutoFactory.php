<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'conteudo' => $faker->paragraph(5, true),
        'price' => $faker->randomFloat(2, 10),
        'slug' => $faker->slug,
    ];
});
