FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN a2enmod rewrite env

WORKDIR /var/www/html

RUN composer create-project --prefer-dist laravel/laravel:^10.0 temp_core
RUN cp -a temp_core/. /var/www/html/ && rm -rf temp_core

COPY . /var/www/html/

# 1. كتابة المفتاح
RUN echo "APP_NAME=AfficanDigital\nAPP_ENV=production\nAPP_KEY=base64:MTIzNDU2Nzg5MDEyMzQ1Njc4OTAxMjM0NTY3ODkwMTI=\nAPP_DEBUG=true\nAPP_URL=https://afficantech.onrender.com" > /var/www/html/.env

# 2. غسيل دماغ للسيرفر لمسح الذاكرة القديمة العالقة (هذا هو مفتاح الحل)
RUN php artisan optimize:clear || true

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/.env

# 3. زرع المفتاح في قلب سيرفر أباتشي كخطة بديلة
RUN printf "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    SetEnv APP_KEY base64:MTIzNDU2Nzg5MDEyMzQ1Njc4OTAxMjM0NTY3ODkwMTI=\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf

EXPOSE 80
