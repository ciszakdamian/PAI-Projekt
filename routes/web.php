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


Route::get('katalog_filmow', 'FilmyController@index');
Route::post('katalog_filmow', 'FilmyController@kategorie');

Route::get('dodaj_do_koszyka/{id}', 'KoszykController@dodaj');
Route::get('koszyk', 'KoszykController@koszyk');
Route::get('usun_z_koszyka/{id}', 'KoszykController@usun');

