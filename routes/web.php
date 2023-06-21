<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ChoferController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ParaderoController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\RpController;
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
    return view('principal');
});
//Rusa administrador
Route::get('/login-admin', [LoginAdminController::class, 'index'])->name('login-admin');
Route::post('/login-admin', [LoginAdminController::class, 'store']);
Route::get('/register-admin', [RegisterAdminController::class, 'index'])->name('register-admin');
Route::post('/register-admin', [RegisterAdminController::class, 'store']);
Route::view('/', 'principal')->name('principal');
Route::get('/dash', [DashController::class, 'index'])->name('dash');
//Ruta cliente
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/muro', [PostController::class, 'index'])->name('posts.index');
Route::get('/location', [LocationController::class, 'index'])->name('location');
Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');
Route::resource('/roles', RolController::class);
Route::resource('/buses', BusController::class);
Route::resource('/chofers', ChoferController::class);
Route::resource('/paraderos', ParaderoController::class);
Route::resource('/rutas', RutasController::class);
Route::resource('/ruta_paraderos', RpController::class);
Route::resource('/usuarios', UsuarioController::class);
//Ruta para perfil
Route::get('/{user}/editar-perfil', [PerfilController::class, 'index'])->name('perfil.index');
Route::post('{user:name}/editar-perfil', [PerfilController::class, 'store'])->name('perfil.store');
