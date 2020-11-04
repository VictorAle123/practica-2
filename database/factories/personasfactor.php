<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Modelos\personasmodelo;

use Faker\Generator as Faker;

$factory->define(personasmodelo::class, function (Faker $faker) {
        //
        $usuario=$faker->unique()->safeEmail;
    $contrasena=$faker->word;
   
    return [
        //

        'usuario'=>$usuario,

        //Contraseña con encriptacion
            'contrasena'=>Hash::make($contrasena),
    

    ];
});
