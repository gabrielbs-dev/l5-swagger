FROM php:8.2-apache

COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

COPY . /var/www/html

RUN apt update \
        && apt install -y zip unzip \
        && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
        && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
        && php -r "unlink('composer-setup.php');"

RUN chown -R $USER:www-data /var/www/ \
        && chmod -R 775 /var/www/

RUN a2enmod rewrite

EXPOSE 80