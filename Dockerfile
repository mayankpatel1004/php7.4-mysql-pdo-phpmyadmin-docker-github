FROM php:7.4-apache

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install mysqli pdo_mysql

RUN mkdir /app \
 && mkdir /app/cloudswift-php-mysql-demo \
 && mkdir /app/cloudswift-php-mysql-demo/www

COPY www/ /app/cloudswift-php-mysql-demo/www/

RUN cp -r /app/cloudswift-php-mysql-demo/www/* /var/www/html/.
