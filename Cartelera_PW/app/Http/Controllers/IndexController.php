<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peliculas;

class IndexController extends Controller
{
    public function mostrarAbout()
    {
        return view('indice.about');
    }

    public function mostrarCartelera()
    {
        $peliculas=peliculas::get();

        return view('indice.cartelera',compact('peliculas'));
    }

    public function show($id)
    {
        return view('indice.pelicula', [
            'peliculas' => peliculas::find($id)
        ]);
    }
}
