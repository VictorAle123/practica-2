<?php

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use App\Modelos\personasmodelo;

class personaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        factory(personasmodelo::class,12)->create();
        DB::table('personas')->insert([

    
            'usuario'=>'Victor loco',
            'contrasena'=>Hash::make('admin'),


        ]);


    }
}

