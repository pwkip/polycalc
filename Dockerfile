FROM php:8.2-fpm

RUN pecl install xdebug-3.2.0 \
    && docker-php-ext-enable xdebug

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN apt-get -y update
RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip