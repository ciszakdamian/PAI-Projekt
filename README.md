## Projektowanie aplikacji internetowych - Projekt
- Damian Ciszak 
- Sebastian Jankowiak


### Wymagania
- PHP => 7.3
- Newer MariaDB or MySql 

### Uruchomienie w trybie dev:
```
git clone git@github.com:ciszakdamian/PAI-Projekt.git
cd PAI-Projekt
composer install
vim .env <-- set correct DB access
php artisan migrate:fresh --seed
php artisan serve
```

