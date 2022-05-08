<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
            ->select('sesiones.dia')
            ->distinct()
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
            'hora'          => 'required',
            'id_peli'       => 'required'
        ]);  

        $peli = peliculas::find($request->get('id_peli'));
        $sesion = DB::table('sesiones')
            ->select('sesiones.*')
            ->where('sesiones.id_sesion', '=', $request->get('hora'))
            ->get();

        return view('reserva.confirmarReserva', ['sesion' => $sesion, 'peli' => $peli]);
    }

    public function crearEntrada($sesion, $titulo)
    {
        entrada::create(['id_sesion' => $sesion, 'id_usuario' => Auth::user()->id, 'titulo' => $titulo]);

        return redirect('/perfil');
    }

    public function borrarEntrada($id)
    {
        
    }
}
