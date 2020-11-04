<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\productosmodelo;


class productoscontroller extends Controller
{
    //7

    public function index($id = null){
        if($id)

        return response()->json(["productos"=>productosmodelo::find($id)],200);


        return response()->json(["productos"=>productosmodelo::all()],200);

    }
    public function guardar(Request $request){

        $productos = new productosmodelo();
        $productos->Nombre = $request->Nombre;


        if($productos->save())

        return response()->json(["productos"=>$productos],201);
        return response()->json(null,400);

    }

    public function eliminar($id)
    {


    
            $productos = productosmodelo::find($id);
    
    
            if($productos->delete()) {
                return response()->json(["productos"=>productosmodelo::all()],200);
    

    }
}


    public function modificar (Request $request, $id) {


        $productos = new productosmodelo();
        $productos = productosmodelo::find($id);

        $productos->producto = $request->producto;


        if($productos->update()){

            
        return response()->json(["productos"=>$productos],201);

        }


    }




}
