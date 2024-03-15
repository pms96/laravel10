## Ejecuta los siguientes comandos para levantar el proyecto.

git clone
cd laravel

## instalar dependecias a traves de docker sin necesitad de tener composer instalado
sh create-project.sh // si tu SO es linus o mac
sh create-project-windows.sh // si tu SO es windows

## levantar docker
./vendor/laravel/sail up

## Comprobar el .env

DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

para que el desarrollo en local sea correto

## preparar la bbdd 
./vendor/bin/sail artisan migrate
./vendor/bin/sail db:seed --class=UsuariosSeeder
./vendor/bin/sail artisan db:seed --class=InformacionUsuariosSeeder
./vendor/bin/sail artisan db:seed --class=FormularioUsuariosSeeder


## Ejercicio 1
## Ejercicio 2
## Ejercicio 3
## Ejercicio 4
## Ejercicio 5
