#!/usr/bin/env bash

npm clean-install
npm run prod

composer install

php artisan vendor:publish --all
php artisan migrate:fresh --seed

php artisan key:generate
php artisan schedule:work --daemon > /dev/null 2>&1 &
