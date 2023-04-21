<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partidos;

class PartidosController extends Controller
{
    public function añadir(Request $request){
        try{
        $partido = new Partidos();
        $partido->partido = $request->name;
        $partido->fecha = $request->email;
        $partido->seccion = $request->password;
        $partido->fila_y_numero = $request->phone;
        $partido->precio = $request->phone;
        $partido->id_user = $request->phone;
        $partido->save();
    }catch(\Illuminate\Database\QueryException $ex){
        $success = false;
        $message = $ex->getMessage();
    }

    $response=[
        'success' => $success,
        'message' => $message,
    ];
    return response()->json($response);
    }
}
