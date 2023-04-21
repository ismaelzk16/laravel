<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entradas;

class EntradasController extends Controller
{
    public function crear(Request $request){
        try{
        $entrada = new Entradas();
        $entrada->partido = $request->partido;
        $entrada->fecha = $request->fecha;
        $entrada->seccion = $request->seccion;
        $entrada->fila_y_numero = $request->fila_y_numero;
        $entrada->precio = $request->precio;
        $entrada->id_user = $request->id_user;
        $entrada->save();
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
