<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mostrarAbout()
    {
        return view('indice.about');
    }

    public function mostrarCartelera()
    {
        return view('indice.cartelera');
    }
}
