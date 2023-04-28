<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Partidos;
use Illuminate\Http\Request;

class PartidoController extends Controller
{

    public function show(Request $request){
        $partido = Partidos::all()->toArray();
        return $partido;
    }

    public function add(Request $request)
    {
         try {
             $partido = new Partidos();
             $partido->golesLocales = $request->golesLocales;
             $partido->golesVisitantes = $request->golesVisitantes;
             $partido->jornada = $request->jornada;
             $partido->situacion = $request->situacion;
             $partido->fecha = $request->fecha;
             $partido->equipoLocal = $request->equipoLocal;
             $partido->equipoVisitante = $request->equipoVisitante;
             $partido->ubicacion = $request->ubicacion;

             $partido->save();

             $success = true;
             $message = "SI";
         } catch (\Illuminate\Database\QueryException $ex) {
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
