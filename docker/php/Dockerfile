FROM php:8.2-fpm-alpine

WORKDIR /var/www/laravel

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# packages for PHP extensions: ldap, gd, zip
RUN apk --no-cache add openldap-dev libpng libpng-dev libjpeg libjpeg-turbo libjpeg-turbo-dev freetype-dev freetype libzip-dev tzdata && \
    mkdir -p /tmp/php_session /tmp/php_upload && chown 101:101 /tmp/php_session /tmp/php_upload && \
	ln -sf /usr/share/zoneinfo/Europe/Moscow /etc/localtime

RUN apk add git curl libpng-dev libxml2-dev zip unzip mc

RUN apk --no-cache add --virtual .build_deps gettext shadow musl brotli libbz2 zlib autoconf gcc make g++ zlib-dev libmemcached-dev libxml2-dev libxml2 && \
    usermod -u 101 www-data && groupmod -g 101 www-data && \

# additional parametres for extensions
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
# install predefined extensions
    docker-php-ext-install -j$(nproc) gd mysqli opcache xml zip ldap && \
# clear image
    docker-php-source delete && \
    apk del .build_deps

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN pecl install xdebug \
 && docker-php-ext-enable xdebug