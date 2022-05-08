<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('indice.index');
}) -> name('inicio');

//INDEX CONTROLLER
Route::get('/about', [IndexController::class, 'mostrarAbout']) -> name('about');
Route::get('/cartelera', [IndexController::class, 'mostrarCartelera']) -> name('cartelera');
Route::get('/cartelera/{id}', [IndexController::class, 'show']) -> name('mostrar_pelicula');

//USUARIOS CONTROLLER   
Route::get('/perfil', [UsuariosController::class, 'mostrarPerfil']) -> name('mainPerfil');


//RESERVAS CONTROLLER
Route::post('/reserva/fecha/{peliculas}', [ReservasController::class, 'elegirFecha']) -> name('elegirFecha');
Route::get('/reserva/fecha/{peliculas}', [ReservasController::class, 'elegirFecha']) -> name('elegirFecha');

Route::post('/reserva/hora', [ReservasController::class, 'elegirHora']) -> name('elegirHora');
Route::get('/reserva/hora', [ReservasController::class, 'elegirHora']) -> name('elegirHora');

Route::post('/reserva/confirmar', [ReservasController::class, 'confirmarReserva']) -> name('confirmarReserva');
Route::get('/reserva/confirmar', [ReservasController::class, 'confirmarReserva']) -> name('confirmarReserva');

Route::post('/reserva/entrada/{sesion}/{titulo}', [ReservasController::class, 'crearEntrada']) -> name('crearEntrada');
Route::get('/reserva/entrada/{sesion}/{titulo}', [ReservasController::class, 'crearEntrada']) -> name('crearEntrada');

Route::get('/reserva/borrar/{id}', [ReservasController::class, 'borrarEntrada']) -> name('borrarEntrada');
Route::post('/reserva/borrar/{id}', [ReservasController::class, 'borrarEntrada']) -> name('borrarEntrada');

//USUARIOS CONTROLLER
//- /mostrarInfo
//- /modInfo
//- 


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
