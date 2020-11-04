<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class productosmodelo extends Model
{
    //
    
    protected $table='productos';
    function comentario()
    {
        //un producto tiene muchos comentarios
        return $$this->hasMany('app\Modelos\comentariosmodelo','productos');

    }
   

}
