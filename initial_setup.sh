#!/usr/bin/env sh

composer install

php artisan vendor:publish --all
php artisan migrate:fresh --seed

php artisan key:generate
