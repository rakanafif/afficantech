# استخدام نسخة PHP رسمية مع خادم Apache
FROM php:8.2-apache

# تثبيت الإضافات اللازمة لـ Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# تفعيل خاصية الروابط في Apache
RUN a2enmod rewrite

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ ملفات الموقع إلى الخادم
COPY . /var/www/html

# تحديد المجلد الرئيسي للموقع (مجلد public في لارافيل)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# إعطاء الصلاحيات اللازمة للمجلدات
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# تثبيت المكتبات البرمجية
RUN composer install --no-dev --optimize-autoloader

# تشغيل الخادم
EXPOSE 80

