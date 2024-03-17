<?php

use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\Prueba4Controller;
use App\Http\Controllers\Prueba5Controller;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('prueba-laravel-1', 'prueba.1')->name('prueba1.laravel');
Route::view('prueba-laravel-2', 'prueba.2')->name('prueba2.laravel');
Route::view('prueba-laravel-3', 'prueba.3')->name('prueba3.laravel');
Route::get('prueba-laravel-4', [Prueba4Controller::class, 'getPrueba4'])->name('prueba4.laravel');
Route::get('prueba-laravel-5', [Prueba5Controller::class, 'getPrueba5'])->name('prueba5.laravel');

Route::post('usuarios/crear-registro', [UsuarioController::class, 'crearRegistro'])->name('usuarios.crearRegistro');

Route::post('documentos/buscar-ids', [DocumentoController::class, 'buscarDocumentoIds'])->name('documentos.buscarIds');

Route::post('roles/usuario', [RolesController::class, 'obtenerRolesDeUsuario'])->name('obtener.roles.usuario');
Route::post('roles/usuario/asignar', [RolesController::class, 'asignarRolesUsuario'])->name('asignar.roles.usuario');