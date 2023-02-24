FROM php:7.4-fpm

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        libzip-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libonig-dev \
        libmcrypt-dev \
        libxml2-dev \
        git \
        unzip \
        curl

RUN docker-php-ext-install pdo_mysql mysqli opcache zip gd mbstring
# 安装 Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# pecl命令从PHP扩展社区库安装PHP扩展，并开启redis扩展
RUN pecl install redis && docker-php-ext-enable redis

# rabbitmq扩展安装rabbitmq-c和php依赖项
RUN apt-get update && \
    apt-get install -y librabbitmq-dev && \
    pecl install amqp && \
    docker-php-ext-enable amqp
