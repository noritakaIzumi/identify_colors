FROM php:7.4.10-apache-buster

# 参考:
# https://oki2a24.com/2018/08/29/how-to-install-php-gd-to-php-5-6-apache-with-dockerfile/

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-install gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && a2enmod rewrite
