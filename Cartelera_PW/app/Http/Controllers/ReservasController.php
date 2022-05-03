<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entrada;
use App\Models\peliculas;
use App\Models\salas;
use App\Models\sesiones;

class ReservasController extends Controller
{
    public function elegirFecha($id)
    {
        $peli=peliculas::find($id);

        return view('reserva.elegirFecha');
    }
}
