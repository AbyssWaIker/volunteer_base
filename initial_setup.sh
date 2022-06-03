#!/usr/bin/env ash

composer install

php artisan vendor:publish --all
php artisan migrate:fresh --seed

php artisan key:generate
