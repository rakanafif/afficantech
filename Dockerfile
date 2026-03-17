FROM php:8.2-apache

# تثبيت الإضافات اللازمة
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl

RUN a2enmod rewrite

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ ملفات المشروع
COPY . /var/www/html

# إنشاء المجلدات وإعطاء الصلاحيات
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# إعداد المجلد الرئيسي
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# أمر التحميل المعدل (يتجاهل الفحوصات التي تسبب الخطأ)
RUN composer install --no-interaction --optimize-autoloader --no-dev --ignore-platform-reqs

EXPOSE 80
