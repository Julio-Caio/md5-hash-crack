FROM php:8-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 8000