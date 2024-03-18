## Ejecuta los siguientes comandos para levantar el proyecto.

git clone
cd laravel

## instalar dependecias a traves de docker sin necesitad de tener composer instalado
sh create-project.sh // si tu SO es linus o mac
sh create-project-windows.sh // si tu SO es windows

## instalar sail
termial bash
composer require laravel/sail --dev
php artisan sail:install

selecionamos solo pgslq y redis pulsando la tecla de espacio.

## levantar docker con sail
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
./vendor/bin/sail artisan db:seed --class=UsuariosSeeder
./vendor/bin/sail artisan db:seed --class=InformacionUsuariosSeeder
./vendor/bin/sail artisan db:seed --class=FormularioUsuariosSeeder
./vendor/bin/sail artisan db:seed --class=RolesSeeder



http://localhost 


## Ejercicio 1 explicación 

si pulsas en crear registro va añadiendo los csv en un sencillo formulario.
cuando le das al boton enviar te devuelve el csv y en el caso de que no exístan más convinaciones posibles te devuelve el error.
Hay dos funciones distintas para generar el csv.
generateCSV: es un función simple en la cual yo la utilizaría en caso de que la aplicción no tuviese un gran número de registros. Ya que es mas sencilla y facil de mantener. 
generateCSVRedis: Es una función un poco mas compleja donde se va almacenando los codigo en caché. Y sería óptima para un uso para una aplicación con un gran numero de registro y de tráfico. Ya que evitamos congestinar lo maxímo posible la base de datos.


## Ejercicio 2

He puesto un pequeño formulario antes para que añadas al usuario que quieras los permisos previamente. Ya que no inserto ningún permiso con los seeders.


## Ejercicio 3

Si pones varios ids hay que separarlos por ','.

## Ejercicio 4

He creado una vista con en la que muestro una tab con la consulta en SQL acompañado de una tabla con sus respectivos resultados de la consulta.


## Ejercicio 5

He realizado lo mismo y he puesto el enunciado de lo que se está buscando.
