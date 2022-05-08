<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peliculas;
use App\Models\sesiones;
use DB;

class AdminController extends Controller
{
    public function mainAdmin()
    {
        return view('admin.mainAdmin');
    }

    //PELICULAS
    public function annadirPeliView()
    {
        return view('admin.annadirPeli');
    }

    public function crearPeli(Request $request)
    {
        $request -> validate ([
            'titulo' => 'required',
            'duracion' => 'required',
            'director' => 'required',
            'genero' => 'required',
            'estreno' => 'required',
            'portada' => 'required',
            'sinopsis' => 'required'
        ]);

        peliculas::create([
            'titulo' => $request->get('titulo'),
            'duracion' => $request->get('duracion'),
            'genero' => $request->get('genero'),
            'estreno' => $request->get('estreno'),
            'director' => $request->get('director'),            
            'portada' => $request->get('portada'),
            'sinopsis' => $request->get('sinopsis')
        ]);

        return redirect('/admin/annadirPeli');
    }

    public function quitarPeliView()
    {
        $peliculas = DB::table('peliculas')
            ->select('peliculas.*')
            ->get();

        return view('admin.quitarPeli', ['peliculas' => $peliculas]);
    }

    public function quitarPeli($id_peli)
    {
        DB::table('peliculas')
            ->where('peliculas.id', '=', $id_peli)
            ->delete();

        return redirect('/admin/elimPeli');
    }

    //SESIONES
    public function annadirSesionView()
    {
        $peliculas = DB::table('peliculas')
        ->select('peliculas.*')
        ->get();

        $salas = DB::table('salas')
        ->select('salas.*')
        ->get();

        return view('admin.annadirSesion', ['peliculas' => $peliculas, 'salas' => $salas]);
    }

    public function crearSesion(Request $request)
    {
        $request -> validate ([
            'sala' => 'required',
            'pelicula' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'dia' => 'required'
        ]);

        sesiones::create([
            'id_sala' => $request->get('sala'),
            'id_pelicula' => $request->get('pelicula'),
            'hora_inicio' => $request->get('hora_inicio'),
            'hora_fin' => $request->get('hora_fin'),
            'dia' => $request->get('dia')
        ]);
        return redirect('/admin/annadirSesion');
    }


    public function quitarSesionView()
    {
        $sesiones = DB::table('sesiones')
            ->select('sesiones.*')
            ->get();

        return view('admin.quitarSesion', ['sesiones' => $sesiones]);
    }

    public function quitarSesion($id_sesion)
    {
        DB::table('sesiones')
            ->where('sesiones.id_sesion', '=', $id_sesion)
            ->delete();

        return redirect('/admin/elimSesion');
    }

    //USUARIOS
    public function quitarUserView()
    {
        $usuarios = DB::table('users')
            ->select('users.*')
            ->get();

        return view('admin.quitarUser', ['users' => $usuarios]);
    }

    public function quitarUser($id_user)
    {
        DB::table('users')
            ->where('users.id', '=', $id_user)
            ->delete();

        return redirect('/admin/elimUser');
    }
}
