<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class KoszykController extends Controller
{
    /**
     * Dodaje produkt do koszyka
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function dodaj(Request $request)
    {
        if ($request->id) {
            $film_id = $request->id;

            if (session()->exists('koszyk')) {
                $koszyk_filmy = session()->get('koszyk');

                $koszyk_produkt_duplikat = False;
                foreach ($koszyk_filmy as $pozycja) {
                    if ($pozycja == $film_id) {
                        $koszyk_produkt_duplikat = True;
                    }
                }

                if ($koszyk_produkt_duplikat == False) {
                    array_push($koszyk_filmy, $film_id);
                    session()->put('koszyk', $koszyk_filmy);
                }

            } else {
                $koszyk_filmy = [];
                array_push($koszyk_filmy, $film_id);
                session()->put('koszyk', $koszyk_filmy);
            }
        }

        return redirect('katalog_filmow');
    }

    /**
     * Zwraca zawartosc koszyka
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function koszyk()
    {
        if (session()->has('koszyk')) {
            $koszyk_pusty = 0;
            $koszyk = session()->get('koszyk');
            $koszyk_lista = [];

            foreach ($koszyk as $id) {
                $film = App\Filmy::where('id', $id)->get();
                array_push($koszyk_lista, $film);
            }

            $koszyk_suma = 0;
            foreach ($koszyk_lista as $film) {
                foreach ($film as $f) {
                    $koszyk_suma += $f['cena'];
                }
            }

            return view('koszyk', ['koszykLista' => $koszyk_lista, 'koszykPusty' => $koszyk_pusty, 'koszykSuma' => $koszyk_suma]);

        } else {
            $koszyk_pusty = 1;
            $koszyk_suma = 0;

            return view('koszyk', ['koszykPusty' => $koszyk_pusty, 'koszykSuma' => $koszyk_suma]);
        }

    }

    /**
     * Usuwa produkty z koszyka
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function usun(Request $request)
    {
        if ($request->id) {
            $film_id = $request->id;
            if (session()->exists('koszyk')) {
                $koszyk_filmy = session()->get('koszyk');
                $film_do_usuniecia = [$film_id];
                $koszyk_filmy = array_diff($koszyk_filmy, $film_do_usuniecia);
                session()->put('koszyk', $koszyk_filmy);
            }
        }

        return redirect('koszyk');
    }

}

