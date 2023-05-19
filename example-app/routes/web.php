<?php

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
    print 'Holis, soy Ivanna Banana.Feature1';
    return view('welcome');
});
Route::get('/saludos', function () {
    print 'Holis, esta es una ruta nueva por Ivanna Banana y esto es Feature1 - conflicto arreglado';
});
