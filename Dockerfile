FROM php:8.2-apache

# تثبيت الإضافات اللازمة
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl

RUN a2enmod rewrite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

# إنشاء المجلدات الناقصة قبل إعطاء الصلاحيات
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache

# إعطاء الصلاحيات
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
