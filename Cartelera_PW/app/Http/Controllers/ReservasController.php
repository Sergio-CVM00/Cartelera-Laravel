<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entrada;
use App\Models\peliculas;
use App\Models\salas;
use App\Models\sesiones;
use DB;

class ReservasController extends Controller
{
    public function elegirFecha($id)
    {
        $peli = peliculas::find($id);
        $fechas = DB::table('sesiones')
            ->join('peliculas', 'id', '=', 'sesiones.id_pelicula')
            ->select('sesiones.*')
            ->where('sesiones.id_pelicula', '=', $id) 
            ->get();
        return view('reserva.elegirFecha', ['fechas' => $fechas, 'peli' => $peli]);
    }

    public function elegirHora(Request $request)
    {
        $request -> validate([
            'fecha'     => 'required',
            'id_peli'   => 'required'
        ]);

        $sesion = DB::table('sesiones')
            ->join('peliculas', 'id', '=', 'sesiones.id_pelicula')
            ->select('sesiones.*')
            ->where('sesiones.dia', '=', $request->get('fecha'))
            ->where('sesiones.id_pelicula', '=', $request->get('id_peli'))
            ->get();

        $peli = peliculas::find($request->get('id_peli'));
        return view('reserva.elegirHora', ['sesion' => $sesion, 'peli' => $peli]);
    }

    public function confirmarReserva(Request $request)
    {
        $request -> validate([
            'id_sesion'     => 'required',
            'id_peli'       => 'required'
        ]);        

        $peli = peliculas::find($request->get('id_peli'));
        $sesion = sesiones::find($request->get('id_sesion'));

        return view('reserva.confirmarReserva', ['sesion' => $sesion, 'peli' => $peli]);
    }

    public function crearEntrada($sesion)
    {
        entrada::create(['id_sesion' => $sesion, 'id_usuario' => Auth::user()->id]);
        return view('indice.perfil'); //Redireccionar a perfil->misEntradas
    }
}
