<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filmy')->insert([
            'tytul' => 'Nietykalni',
            'kategoria' => 'Biograficzny',
            'rok_produkcji' => 2011,
            'opis_fabuly' => 'Ta historia zdarzyła się naprawdę. Sparaliżowany na skutek wypadku milioner zatrudnia do pomocy i opieki młodego chłopaka z przedmieścia, który właśnie wyszedł z więzienia. Zderzenie dwóch skrajnie różnych światów daje początek szeregowi niewiarygodnych przygód i przyjaźni, która czyni ich... nietykalnymi.',
            'cena' => 37.44
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Forrest Gump ',
            'kategoria' => 'Dramat',
            'rok_produkcji' => 1994,
            'opis_fabuly' => 'Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.',
            'cena' => 25.99
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Ojciec Chrzestny II',
            'kategoria' => 'Dramat',
            'rok_produkcji' => 1974,
            'opis_fabuly' => 'Rok 1917. Młody Vito Corleone stawia pierwsze kroki w mafijnym świecie Nowego Jorku. Ponad 40 lat później jego syn Michael walczy o interesy i dobro rodziny.',
            'cena' => 42.00
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Władca Pierścieni Powrót Króla',
            'kategoria' => 'Fantasy',
            'rok_produkcji' => 2003,
            'opis_fabuly' => 'Zwieńczenie filmowej trylogii wg powieści Tolkiena. Aragorn jednoczy siły Śródziemia, szykując się do bitwy, która ma odwrócić uwagę Saurona od podążających w kierunku Góry Przeznaczenia hobbitów',
            'cena' => 19.99
        ]);

        DB::table('filmy')->insert([
            'tytul' => 'Milczenie Owiec',
            'kategoria' => 'Thriller',
            'rok_produkcji' => 1991,
            'opis_fabuly' => 'Seryjny morderca i inteligentna agentka łączą siły, by znaleźć przestępcę obdzierającego ze skóry swoje ofiary.',
            'cena' => 15.23
        ]);


    }
}
