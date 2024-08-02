<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;


use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservaController;



use Illuminate\Support\Facades\Log;

Route::get('/test-log', function () {
    Log::info('This is a test log message.');
    return 'Check the Vercel logs for this message';
});

 
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


Route::get('/test', function () {
    return 'Ruta de prueba funcionando correctamente';
});



Route::resource('usuarios', UsuarioController::class);
Route::resource('reservas', ReservaController::class);


