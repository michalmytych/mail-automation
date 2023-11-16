# https://laravel.com/docs/10.x

### Tworzenie projektu

composer create-project laravel/laravel example-app

### Uruchomienie projektu (na http://localhost:8000):

php artian serve

### Po kazdej zmianie w pliku .env, jesli chcemy zeby zmiany sie zaladowaly do aplikacji, to musimy wykonac:

php artisan config:cache

### Sprawdzanie co dzieje sie w aplikacji:

Otwierasz plik: /routes/web.php

### Wyświetlmy widok ktory jest renderowany przez view('welcome')

/resources/views/welcome.blade.php

# Uzupełniamy dane logowania bazy danych w pliku .env i robimy php artisan config:cache a następnie php artisan migrate 
https://laravel.com/docs/10.x/migrations


