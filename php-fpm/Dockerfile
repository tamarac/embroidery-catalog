FROM 7.2-fpm-alpine

RUN apk --update add wget curl git php php-curl php-openssl php-json php-phar php-dom && rm /var/cache/apk/*

RUN set -ex \
    && apk add --no-cache libpq libmagic libmcrypt libmcrypt-dev icu-dev \
    && apk add --no-cache --virtual .phpize-deps $PHPIZE_DEPS \
    && docker-php-ext-install bcmath intl mcrypt opcache pcntl pdo_mysql \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apk del .phpize-deps

RUN set -ex \
    && sed -i -e "s/;request_terminate_timeout\s*=[^\n]*/request_terminate_timeout = 300/g" /usr/local/etc/php-fpm.d/www.conf \
    && sed -i -e "s/pm.max_children\s*=[^\n]*/pm.max_children = 24/g" /usr/local/etc/php-fpm.d/www.conf \
    && sed -i -e "s/pm.min_spare_servers\s*=[^\n]*/pm.min_spare_servers = 7/g" /usr/local/etc/php-fpm.d/www.conf \
    && sed -i -e "s/pm.start_servers\s*=[^\n]*/pm.start_servers = 7/g" /usr/local/etc/php-fpm.d/www.conf \
    && sed -i -e "s/pm.max_spare_servers\s*=[^\n]*/pm.max_spare_servers = 17/g" /usr/local/etc/php-fpm.d/www.conf \
&& php-fpm --test

EXPOSE 9000
