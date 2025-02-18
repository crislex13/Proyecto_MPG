<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClientController;

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
//ruta de welcome
Route::get('/', function () {
    return view('welcome');
});
//ruta para entrar a home
Route::get('/home', [HomeController::class, 'index'])->name('home');

//ruta para roles y permisos
Route::group(['middleware' => ['auth']], function() {
    
});
// rutas de los controladores
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('posts', PostController::class);
Route::resource('clients', ClientController::class);


Auth::routes();