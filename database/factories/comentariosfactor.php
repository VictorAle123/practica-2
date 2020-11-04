<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\comentariosmodelo;

use Faker\Generator as Faker;



        $factory->define(comentariosmodelo::class, function (Faker $faker) {
            $comentario=$faker->word;
            $persona=$faker->numberBetween(1,12);
            $producto=$faker->numberBetween(1,12);
            return [
                //Campo         Variable
                'comentario'=>$comentario,
                'persona'=>$persona,
                'producto'=>$producto,
                //
            ];


});
