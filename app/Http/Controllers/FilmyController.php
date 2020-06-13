<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class FilmyController extends Controller
{
    private function koszyk_zliczanie(){
        if (session()->exists('koszyk')) {
            $koszyk_filmy = session()->get('koszyk');
            return count($koszyk_filmy);
        }
    }

    public function index()
    {
        $filmy = App\Filmy::all();
        $kategorie = App\Filmy::orderBy('kategoria', 'asc')->groupBy('kategoria')->get('kategoria');

        $koszyk_ilosc = $this->koszyk_zliczanie();

        return view('katalog_filmow', ["katalogFilmow" => $filmy, 'katalogKategorie' => $kategorie, 'koszykIlosc' => $koszyk_ilosc]);
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

            $koszyk_ilosc = $this->koszyk_zliczanie();

        }

        return view('katalog_filmow', ["katalogFilmow" => $filmy, 'katalogKategorie' => $kategorie, 'koszykIlosc' => $koszyk_ilosc]);

    }


}
