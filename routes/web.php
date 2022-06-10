<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('welcome');
});

Route::get('/metodologia', function () {
    return Storage::download('public/1.MetodologiaATCC.pdf');
});

Route::get('/capacitacion', function () {
    return Storage::download('public/2.Capacitacion-Integracion-ATCC.pdf');
});

Route::get('/manual', function () {
    return Storage::download('public/3.Manual-de-usuario5.pdf');
});

Route::get('/glosario', function () {
    return Storage::download('public/4.Glosario-V2.pdf');
});
