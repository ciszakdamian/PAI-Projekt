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
    return view('welcome');
});

Route::get('/katalog_filmow', function () {

    $filmy = App\Filmy::all();

    foreach ($filmy as $film) {
        echo $film->tytul;
        echo '</br>';
        echo $film->kategoria;
        echo '</br>';
        echo $film->rok_produkcji;
        echo '</br>';
        echo $film->opis_fabuly;
        echo '</br>';
        echo $film->cena;
        echo '</br></br>';
    }


});
