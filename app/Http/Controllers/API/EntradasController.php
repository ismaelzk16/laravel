<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entradas;
use App\Models\Partidos;

class EntradasController extends Controller
{
    public function save(Request $request)
    {
        // Guardar entrada en la sesión
        $partido = Partidos::find($request->input('id_partido'));
        $entrada = [
            'seccion' => $request->input('seccion'),
            'fila' => $request->input('fila'),
            'numero' => $request->input('numero'),
            'precio' => $request->input('precio'),
            'id_partido' => $request->input('id_partido'),
            'fecha_partido' => $partido->fecha // Agregar fecha del partido al arreglo de entrada
        ];
        $entradas = session()->get('entradas', []);
        $entradas[] = $entrada;
        session()->put('entradas', $entradas);

        return redirect('/entradas')->with('success', 'Entrada guardada con éxito');
    }

    public function comprarEntradas()
    {
        // Obtener las entradas de la sesión
        $entradas = session()->get('entradas', []);

        // Guardar las entradas en la base de datos
        foreach ($entradas as $entrada) {
            $nueva_entrada = new Entradas;
            $nueva_entrada->fecha = Partidos::find($entrada['id_partido'])->fecha;
            $nueva_entrada->seccion = $entrada['seccion'];
            $nueva_entrada->fila = $entrada['fila'];
            $nueva_entrada->numero = $entrada['numero'];
            $nueva_entrada->precio = $entrada['precio'];
            $nueva_entrada->id_partido = $entrada['id_partido'];
            $nueva_entrada->id_user = auth()->id();
            $nueva_entrada->save();

        }

        // Limpiar la sesión de entradas
        // session()->forget('entradas');

        return redirect('/entradas')->with('success', 'Entradas compradas con éxito');
    }

    public function getEntradas() {
        $entradas = session()->get('entradas', []);
        return $entradas;
    }

    public function delete($id)
    {
        $entradas = session()->get('entradas', []);

        foreach ($entradas as $index => $entrada) {
            if ($entrada['id_partido'] === $id) {

                break;
            }
        }
    }



}
