
copy .env.example .env


icacls storage /grant:r "%USERNAME%:(OI)(CI)F" /T
icacls bootstrap\cache /grant:r "%USERNAME%:(OI)(CI)F" /T
takeown /F composer.lock

docker run --rm ^
    -u "%USERDOMAIN%\%USERNAME%:%USERDOMAIN%\%USERNAME%" ^
    -v "%cd%:/var/www" ^
    -w /var/www ^
    composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

docker exec -it laravel-app sh -c "php artisan key:generate"
docker exec -it laravel-app sh -c "php artisan cache:clear"
