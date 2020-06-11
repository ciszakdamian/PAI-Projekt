<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class FilmyController extends Controller
{

    public function index()
    {
        $filmy = App\Filmy::all();
        $kategorie = App\Filmy::orderBy('kategoria', 'asc')->groupBy('kategoria')->get('kategoria');

        return view('katalog_filmow', ["katalogFilmow" => $filmy], ['katalogKategorie' => $kategorie]);
    }

    public function kategorie(Request $request)
    {

        if ($request['kategoria'] != "") {

            $filmy = App\Filmy::where('kategoria', '=', $request['kategoria'])->get();
            $kategorie = App\Filmy::orderBy('kategoria', 'asc')->groupBy('kategoria')->get('kategoria');

            if ($request['kategoria'] == "Wszystkie") {
                $filmy = App\Filmy::all();
                $kategorie = App\Filmy::orderBy('kategoria', 'asc')->groupBy('kategoria')->get('kategoria');
            }


        }

        return view('katalog_filmow', ["katalogFilmow" => $filmy], ['katalogKategorie' => $kategorie]);

    }


}
