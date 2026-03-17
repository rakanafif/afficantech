FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN a2enmod rewrite

WORKDIR /var/www/html

RUN composer create-project --prefer-dist laravel/laravel:^10.0 temp_core
RUN cp -a temp_core/. /var/www/html/ && rm -rf temp_core

COPY . /var/www/html/

# السطرين السحريين لتوليد مفتاح الحماية وحل شاشة MissingAppKey
RUN cp .env.example .env || true
RUN php artisan key:generate --force

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

RUN printf "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf

EXPOSE 80
