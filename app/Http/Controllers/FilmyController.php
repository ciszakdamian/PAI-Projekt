<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class FilmyController extends Controller
{

    /**
     * Zwraca ilosc produktow w koszyku
     * @return int
     */
    private function koszyk_zliczanie(){
        if (session()->exists('koszyk')) {
            $koszyk_filmy = session()->get('koszyk');
            return count($koszyk_filmy);
        }
    }

    /**
     * Pobiera z bazy wszystkie filmy i przekazuje do widoku katalog_filmow
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $filmy = App\Filmy::all();
        $kategorie = App\Filmy::orderBy('kategoria', 'asc')->groupBy('kategoria')->get('kategoria');

        $koszyk_ilosc = $this->koszyk_zliczanie();

        return view('katalog_filmow', ["katalogFilmow" => $filmy, 'katalogKategorie' => $kategorie, 'koszykIlosc' => $koszyk_ilosc]);
    }

    /**
     * Pobiera z bazy filmy na podstawie kategorii
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
