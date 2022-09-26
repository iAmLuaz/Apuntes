<?php

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
    return view('index');
});

Route::get('/mostrar-fecha', function () {
    return view('mostrar-fecha');
});

Route::get('/especialidad/{specialityName?}/{area?}', function ($specialityName = 'Elige primero una especialidad', $area = 'Agrega un area') {
    return view('especialidades/especialidad', array(
        'specialityName' => $specialityName,
        'area' => $area
    ));
})->where(array(
    'specialityName' => '[a-zA-Z]+',
    'area' => '[a-zA-Z]+'
));