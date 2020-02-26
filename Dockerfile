# step 1
FROM php:7.4.3-fpm-alpine3.11 AS custom-laravel

# step 2
#WORKDIR /root
#RUN apt-get update            
#RUN apt-get install -y curl procps vim

RUN apk update \
        && apk add -u vim procps tzdata bash curl libzip libzip-dev \
        && rm -rf /var/cache/apk/*

RUN cp /usr/share/zoneinfo/Asia/Seoul /etc/localtime
RUN echo "Asia/Seoul" > /etc/timezone

# step 3
RUN curl -sS https://getcomposer.org/installer | php  
RUN mv composer.phar /usr/bin/composer

# step 4
#RUN apt-get install -y zlib1g-dev && apt-get install -y libzip-dev
RUN docker-php-ext-install zip

# step 5
RUN composer global require laravel/installer
RUN ["/bin/bash", "-c", "echo PATH=$PATH:~/.composer/vendor/bin/ >> ~/.bashrc"]
RUN ["/bin/bash", "-c", "source ~/.bashrc"]

# step 6
EXPOSE 81
EXPOSE 77
CMD ["php-fpm"]

RUN mkdir laravel
WORKDIR /root/laravel
#RUN ["/bin/bash", "-c", "laravel", "new", "f"]
#RUN laravel new f
#WORKDIR /root/f
#RUN php artisan serve --host 0.0.0.0 --port 81
#ENTRYPOINT ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "81"]
