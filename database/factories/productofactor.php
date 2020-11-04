<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;

use App\Modelos\productosmodelo;

use Faker\Generator as Faker;

$factory->define(productosmodelo::class, function (Faker $faker) {
    
    $producto=$faker->word;

    return [
        //

        'producto'=>$producto,

    ];
});
