<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;


use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservaController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('reservas', ReservaController::class);


// Route::get('/', function () {
//     return view('welcome');
// });

// use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('index');
});



Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return 'Conexión a la base de datos exitosa.';
    } catch (\Exception $e) {
        return 'No se pudo conectar a la base de datos: ' . $e->getMessage();
    }
});


Route::get('/login', function () {
    return view('sesion');
});



Route::resource('usuarios', UsuarioController::class);
Route::resource('reservas', ReservaController::class);


