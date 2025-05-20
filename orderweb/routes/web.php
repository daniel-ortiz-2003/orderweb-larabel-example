<?php

use App\Http\Controllers\CausalController;
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

// Página principal y pruebas
Route::get('/', function () {
    return view('test');
})->name('test');

Route::get('/test2', function () {
    return view('test2');
})->name('test2');

// Rutas para Causales

Route::prefix('causal')->group(function(){
    Route::get('/index', [CausalController::class, 'index'])->name('causal.index');
    Route::get('/create', [CausalController::class, 'create'])->name('causal.create');
    Route::get('/edit/{id]', [CausalController::class, 'edit'])->name('causal.edit');
    Route::post('/store', [CausalController::class, 'store'])->name('causal.store');
    Route::put('/update/{id]', [CausalController::class, 'update'])->name('causal.update');
    Route::get('/destroy/{id]', [CausalController::class, 'destroy'])->name('causal.destroy');
});

// Rutas para Observaciones
route::get('/observation/create', function () {
    return view('observation.create');
})->name('observation.create');

route::get('/observation/index', function () {
    return view('observation.index');
})->name('observation.index');

route::get('/observation/edit', function () {
    return view('observation.edit');
})->name('observation.edit');

// Rutas para Tipos de Actividad
route::get('/type_activity/create', function () {
    return view('type_activity.create');
})->name('type_activity.create');

route::get('/type_activityn/index', function () {
    return view('type_activity.index');
})->name('type_activity.index');

route::get('/type_activityn/edit', function () {
    return view('type_activity.edit');
})->name('type_activity.edit');

// Rutas para Actividades
route::get('/activity/create', function () {
    return view('activity.create');
})->name('activity.create');

route::get('/activity/index', function () {
    return view('activity.index');
})->name('activity.index');

route::get('/activity/edit', function () {
    return view('activity.edit');
})->name('activity.edit');

// Rutas para Ordenes
route::get('/order/create', function () {
    return view('order.create');
})->name('order.create');

route::get('/order/index', function () {
    return view('order.index');
})->name('order.index');

route::get('/order/edit', function () {
    return view('order.edit');
})->name('order.edit');

// Rutas para Técnicos
route::get('/technician/create', function () {
    return view('technician.create');
})->name('technician.create');

route::get('/technician/index', function () {
    return view('technician.index');
})->name('technician.index');

route::get('/technician/edit', function () {
    return view('technician.edit');
})->name('technician.edit');