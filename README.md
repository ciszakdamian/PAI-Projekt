## Projektowanie aplikacji internetowych - Projekt

## Autorzy
**Damian Ciszak** 
**Sebastian Jankowiak**


### Wymagania
- PHP => 7.3
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
