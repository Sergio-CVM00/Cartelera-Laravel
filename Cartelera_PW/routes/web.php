<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReservasController;
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
});

//INDEX CONTROLLER
Route::get('/about', [IndexController::class, 'mostrarAbout']) -> name('about');
Route::get('/perfil', [IndexController::class, 'mostrarPerfil']) -> name('mainPerfil');
Route::get('/cartelera', [IndexController::class, 'mostrarCartelera']) -> name('cartelera');
Route::get('/cartelera/{id}', [IndexController::class, 'show']) -> name('mostrar_pelicula');
//login/register

//RESERVAS CONTROLLER
Route::post('/reserva/fecha/{peliculas}', [ReservasController::class, 'elegirFecha']) -> name('elegirFecha');
Route::get('/reserva/fecha/{peliculas}', [ReservasController::class, 'elegirFecha']) -> name('elegirFecha');
Route::post('/reserva/hora', [ReservasController::class, 'elegirHora']) -> name('elegirHora');
Route::get('/reserva/hora', [ReservasController::class, 'elegirHora']) -> name('elegirHora');
Route::get('/reserva/confirmar', [ReservasController::class, 'confirmarReserva']) -> name('confirmarReserva');

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
