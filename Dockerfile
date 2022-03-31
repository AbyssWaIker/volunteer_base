FROM php:7.3-fpm

# Копируем список необходимиых php пакетов
COPY composer.lock composer.json /var/www/

#устанавливаем все пакеты необходимые для работы php и npm
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libbz2-dev \
    libfreetype6-dev \
    mariadb-client \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libxml++2.6-dev \
    libonig-dev \
    nodejs \
    npm

# Чистим Кеш
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Устанавливаем расширения php
RUN docker-php-ext-install -j$(nproc) pdo_mysql mbstring zip exif pcntl bz2
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Устанавливаем composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Добавляем пользователя для php приложения
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Копируем существующее php приложение и его разрешения
COPY . /var/www

#Устанавливаем все пакеты php и javascript
RUN cd /var/www/ && npm install && npm run prod
#ЧЕРТОВ DOCKERFILE ПЛЮЕТ НА ВСЕ ЗАВИСИМОСТИ DOCKER-COMPOSE И НЕ ЖДЕТ ПОКА БАЗА ДАННЫХ ЗАПУСТИТСЯ!!!!!!!!!
#RUN cd /var/www/ && composer install && php artisan admin:install

#Открываем прилложению доступ к папкам с установленными пакетами
RUN chown -R www:www /var/www

# Меняем текущего пользователя
USER www

# Открываем порт 9000 и запускаем php-fpm сервер
EXPOSE 9000
CMD ["php-fpm", "composer install && php artisan admin:install"]

