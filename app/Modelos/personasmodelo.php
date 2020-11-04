<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class personasmodelo extends Model
{
    //


    protected $fillable = ['usuario', 'contrasena'];
    protected $table='personas';
    function comentario()
    {
        return $$this->hasMany('app\Modelos\comentariosmodelo','personas');
    }


   


}
