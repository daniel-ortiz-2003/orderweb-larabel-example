<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas serán
| asignadas al grupo de middleware "web". ¡Haz algo grandioso!
|
*/

Route::get('/', function () {
    return view('test');
})->name('test');
Route::get('/test2', function () {
    return view('test2');
})->name('test2');
route::get('/causal/create', function () {
    return view('causal.create');
})->name('causal.create');

route::get('/causal/index', function () {
    return view('causal.index');
})->name('causal.index');