<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class middlewareController extends Controller
{
    //

    public function ejemplo(){

        return response()->json("OK",200);


    }
}
