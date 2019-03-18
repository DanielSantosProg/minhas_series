<?php

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

Route::get('/generos', function () {
    $genero = \App\Genero::all();

    foreach ($genero as $generos) {
        echo $generos->id . "<br>";
        echo $generos->nome . "<br>";
    }
});

Route::get('/series', function () {
    $serie = \App\Serie::all();

    foreach ($serie as $series) {
        echo $series->id . "<br>";
        echo $series->nome . "<br>";
        echo $series->genero_id . "<br>";
        echo $series->sinopse . "<br>";                        
    }
});
