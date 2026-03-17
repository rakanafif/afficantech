FROM php:8.2-apache

# تثبيت الأساسيات فقط
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN a2enmod rewrite

# نسخ ملفات المشروع بالكامل
COPY . /var/www/html

# إنشاء المجلدات الضرورية
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# إعداد المسار الرئيسي
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# ملاحظة: حذفنا سطر composer install لتجنب انهيار الذاكرة
# سنعتمد على الملفات المرفوعة مباشرة

EXPOSE 80
