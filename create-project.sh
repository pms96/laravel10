#!/bin/bash

    # Copy .env
    cp .env.example .env

    # Change permissions in storage
    sudo chmod -R 777 storage/
    sudo chmod -R 777 bootstrap/cache/
    sudo chown -R $USER ./composer.lock

    #  Comands to docker on server if its have sail 
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www" \
        -w /var/www \
        composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev
    
    docker exec -it laravel-app sh -c "php artisan key:generate"
    docker exec -it laravel-app sh -c "php artisan cache:clear"