FROM php:8.3.2-fpm

RUN apt-get update && apt-get install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip acl nodejs npm \
    && docker-php-ext-install intl opcache mysqli pdo pdo_mysql\
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && pecl install pcov \
    && docker-php-ext-enable pcov \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./ ./


ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/html
RUN ["chmod", "o+w", "/var/www/html/storage/", "-R"]
RUN ["composer", "install"]
RUN ["composer", "dump-autoload", "--optimize"]
RUN ["php", "artisan", "key:generate"]
RUN ["npm", "install"]
RUN ["npm", "run", "build"]
RUN ["php", "artisan", "migrate", "--seed"]

ENTRYPOINT ["/bin/sh", "-c"]
