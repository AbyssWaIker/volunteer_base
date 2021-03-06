FROM php:7.3-fpm-alpine

# Копируем список необходимиых php пакетов
COPY composer.lock composer.json /var/www/

#устанавливаем все пакеты необходимые для работы php и npm
RUN set -ex \
	&& apk --no-cache add \
    # build-essential \
    g++\
    make\
    libpng-dev \
    bzip2-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    # locales \
    zip \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    git \
    curl \
    libxml++-2.6-dev \
	oniguruma-dev \
    libpq-dev \
    nodejs \
    npm

# Устанавливаем расширения php
RUN docker-php-ext-install -j$(nproc) pdo pdo_pgsql pgsql mbstring zip exif pcntl bz2
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Устанавливаем composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Добавляем пользователя для php приложения
RUN addgroup -g 1000 -S www
RUN adduser -u 1000 -S www -G www

# Копируем существующее php приложение и его разрешения
COPY . /var/www

#Устанавливаем все пакеты php и javascript
RUN cd /var/www/ && npm install && npm run prod
#ЧЕРТОВ DOCKERFILE ПЛЮЕТ НА ВСЕ ЗАВИСИМОСТИ DOCKER-COMPOSE И НЕ ЖДЕТ ПОКА БАЗА ДАННЫХ ЗАПУСТИТСЯ!!!!!!!!!
#RUN cd /var/www/ && composer install && php artisan migrate:fresh --seed

#Открываем прилложению доступ к папкам с установленными пакетами
RUN chown -R www:www /var/www

# Меняем текущего пользователя
USER www

# Открываем порт 9000 и запускаем php-fpm сервер
EXPOSE 9000
CMD [ "php-fpm"]

