<?php

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use App\Modelos\productosmodelo;

class productoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        
        factory(productosmodelo::class,12)->create();
        DB::table('productos')->insert([

    
            'producto'=>'tenis',
          

        ]);



    }
}
