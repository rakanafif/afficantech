FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN a2enmod rewrite

COPY . /var/www/html

# إعداد المسارات الأساسية
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# ضبط الصلاحيات الشاملة
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# إضافة أمر السماح بالدخول المباشر
RUN printf "<Directory /var/www/html/public>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n" >> /etc/apache2/apache2.conf

EXPOSE 80
