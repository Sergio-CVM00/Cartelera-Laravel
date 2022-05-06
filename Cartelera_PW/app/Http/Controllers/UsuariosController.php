<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UsuariosController extends Controller
{
    public function mostrarPerfil()
    {
        $entradas = DB::table('entrada')
            ->select('entrada.*')
            ->where('entrada.id_usuario', '=', Auth::user()->id)
            ->get();
            
        return view('indice.perfil', ['entradas' => $entradas]);
    }
}
