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
        return view('reserva.elegirHora', ['sesion' => $sesion]);
    }

    public function confirmarReserva()
    {
        return view('reserva.confirmarReserva');
    }
}
