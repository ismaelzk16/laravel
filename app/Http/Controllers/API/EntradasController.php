<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Entradas;

class EntradasController extends Controller
{
    public function crear(Request $request){
        try{
        $entrada = new Entradas();
        $entrada->golesLocales = $request->golesLocales;
        $entrada->golesVisitantes = $request->golesVisitantes;
        $entrada->jornada = $request->jornada;
        $entrada->situacion = $request->situacion;
        $entrada->fecha = $request->fecha;
        $entrada->equipoLocal = $request->equipoLocal;
        $entrada->equipoVisitante = $request->equipoVisitante;
        $entrada->ubicacion = $request->ubicacion;
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
