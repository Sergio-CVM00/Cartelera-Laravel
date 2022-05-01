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
//login/register

//RESERVAS CONTROLLER
Route::get('/reserva/fecha', [ReservasController::class, 'elegirFecha']) -> name('elegirFecha');
Route::get('/reserva/fecha/cartelera', [ReservasController::class, 'elegirPelicula']) -> name('elegirPelicula');
Route::get('/reserva/fecha/cartelera/{pelicula}', [ReservasController::class, 'infoPelicula']) -> name('infoPelicula');
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
