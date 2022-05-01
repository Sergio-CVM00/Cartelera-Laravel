<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function elegirFecha()
    {
        return view('reserva.elegirFecha');
    }

    public function elegirPelicula()
    {
        return view('reserva.elegirPelicula');
    }

    public function infoPelicula()
    {
        return view('reserva.infoPelicula');
    }
}
