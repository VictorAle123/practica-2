<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class comentariosmodelo extends Model
{
 
protected $table='comentarios';


function persona()
    {
        //una persona hara muchos comentarios
        return $this->belongsToMany('app\Modelos\comentariosmodelo');
    }

    
    function producto()
    {
        //un producto tendra muchos comentarios
        return $this->belongsToMany('app\Modelos\comentariosmodelo');
    }
 




    //
}
