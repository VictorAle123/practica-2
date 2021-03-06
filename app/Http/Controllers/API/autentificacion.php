<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class autentificacion extends Controller
{
    //
public function index(Request $request)

{

    if ($request->user()->tkenCaon('user:info') && $request->user()->tokenCan ('admin:admin'))
    return response()->json(["users"=> User::all()],200);

    if ($request->user()->tokenCan('user:info'))
    return response()->jason(["perfil"=> $request->user()],200);
    abort(401,"Scope invalido");

}


public function logout(Request $request)
{

    return response()->json(["afectados"=> $request->user()->tokens()->delete()],200);
    

}


    public function login (Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password'=> 'required',
    ]);

    $user = User::where('email',$request->email)->first();


    if (!$user || !Hash::check($request->password, $user->password)) {

        throw ValidationException::withMessages([

            'email|password' =>['Credenciales incorrectas..'],
            
        ]);

    }
    $token = $user->createToken($request->email,['user:info','admin:admin'])->plainTextToken;
    return response()->json(["token" => $token],201);


    }



public function registro(Request $request)

{

    $request->validate([

        'name' => 'required',
        'email' => 'required|email',
        'password'=> 'required',
       


    ]);


$user           = new User();
$user->name     =$request->name;
$user->email    =$request->email;
$user->password = hash::make($request->password);

if($user->save())
return response()->json($user,200);


return abort(422,"fallo al insertar");


    }
}

