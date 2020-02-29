# step 1
FROM php:7.4.3-fpm-alpine3.11 AS custom-laravel

# step 2
WORKDIR /root

RUN apk update \
        && apk add -u vim procps tzdata bash curl libzip libzip-dev \
        && rm -rf /var/cache/apk/*

RUN cp /usr/share/zoneinfo/Asia/Seoul /etc/localtime
RUN echo "Asia/Seoul" > /etc/timezone

# step 3
# Composer Install
RUN curl -sS https://getcomposer.org/installer | php  
RUN mv composer.phar /usr/bin/composer

# step 4
# PHP Extension Install
RUN docker-php-ext-install zip

# step 5
# Laravel Install
RUN composer global require laravel/installer

# step 6
# Bind Port
EXPOSE 81
CMD ["php-fpm"]

RUN mkdir laravel-project
WORKDIR /root/laravel-project