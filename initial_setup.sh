#!/usr/bin/env sh

docker-compose exec app composer install

docker-compose exec app php artisan vendor:publish --all
docker-compose exec app php artisan migrate:fresh --seed

docker-compose exec app php artisan key:generate

echo "0 16 * * * docker-compose exec app php artisan db:backup" > /tmp/crontab
crontab /tmp/crontab
rm /tmp/crontab