<?php

use Illuminate\Database\Seeder;
use App\Modelos\comentariosmodelo;
use App\Modelos\personasmodelo;
use App\Modelos\productosmodelo;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

$this->call(personaseeder::class);
        $this->call(productoseeder::class);
        $this->call(comentarioseeder::class);

    


        // $this->call(UserSeeder::class);
    }
}
