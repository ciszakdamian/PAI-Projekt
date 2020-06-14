## Projektowanie aplikacji internetowych - Projekt

Celem projektu jest implementacja fragmentu systemu dla sklepu sprzedającego filmy przez
Internet. W ramach projektu powinna zostać zaimplementowana część systemu obejmująca
(szczegółowe zadania wypunktowane poniżej):

- Przeglądanie katalogu filmów (podstawowe informacje, bez opisu fabuły)
z możliwością zawężenia listy do konkretnej kategorii
- Wyświetlanie szczegółowego opisu pojedynczego filmu (komplet danych o filmie
wraz z opisem fabuły)
- Obsługę koszyka zakupów klienta (dodawanie i usuwanie filmów, podgląd zawartości
koszyka, podliczanie całkowitej wartości koszyka)
NIE podlegają implementacji fragmenty systemu odpowiedzialne za ewidencję klientów,
autoryzację klientów, składanie zamówienia, uaktualnianie katalogu filmów.
Dane o filmach powinny być przechowywane w bazie danych. Każdy film powinien być
opisany przynajmniej następującymi atrybutami: id, tytuł, kategoria (dramat, komedia,
familijny, itd.), rok produkcji, opis fabuły, cena.




## Autorzy
- **Damian Ciszak** 
- **Sebastian Jankowiak**


### Wymagania
- PHP => 7.3
- Composer
- Newer MariaDB or MySQL

### Uruchomienie w trybie dev:
```
git clone git@github.com:ciszakdamian/PAI-Projekt.git
cd PAI-Projekt
composer install
vim .env <-- set correct DB access
php artisan migrate:fresh --seed
php artisan serve
```

### Screeny
![lista_filmow](https://raw.githubusercontent.com/ciszakdamian/PAI-Projekt/dev/readme-img/filmy_lista.png?token=AFPZD66USGPPW4OOK4J7WRK655DJW)

![koszyk](https://raw.githubusercontent.com/ciszakdamian/PAI-Projekt/dev/readme-img/koszyk.png?token=AFPZD6ZUMP43YVAJYXE7RDC655DM4)
