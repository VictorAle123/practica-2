<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\personasmodelo;



class personascontroller extends Controller
{
    //

    public function index($id = null){


        if($id)

        return response()->json(["comentarios"=>personasmodelo::find($id)],200);


        return response()->json(["comentarios"=>personasmodelo::all()],200);


    }


    
    public function guardar(Request $request){

        $personas = new personasmodelo();

        $personas->usuario = $request->usuario;
        
        $personas->contrasena = $request->contrasena;

        
        if($personas->save())

        return response()->json(["personas"=>$personas],201);
        return response()->json(null,400);

    }

    
    public function eliminar($id)
    {
    
            $comentarios = personasmodelo::find($id);
    
            if($comentarios->delete()) {
                return response()->json(["personas"=>personasmodelo::all()],200);
    

    }


    


}



public function modificar (Request $request, $id) {

    $personas = new personasmodelo();
    $personas = personasmodelo::find($id);

    $personas->usuario = $request->usuario;

    $personas->contrasena = $request->contrasena;


    if($personas->update()){

    return response()->json(["personas"=>$personas],201);

    }



}
}