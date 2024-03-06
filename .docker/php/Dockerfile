FROM php:8.3.2-fpm

RUN usermod -u 1000 www-data

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zlib1g-dev g++ git libicu-dev zip libzip-dev zip acl nodejs npm curl \
    && docker-php-ext-install intl opcache mysqli pdo pdo_mysql mbstring exif pcntl bcmath gd \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && pecl install pcov \
    && docker-php-ext-enable pcov \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN apt clean && rm -rf /var/lib/apt/lists/*

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY ./ ./
