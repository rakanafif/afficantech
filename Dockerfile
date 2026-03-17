FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN a2enmod rewrite

COPY . /var/www/html

# ضبط الإعدادات لفتح كل شيء للعامة (حل مشكلة 403 بشكل نهائي)
RUN echo '<Directory /var/www/html/>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n\
\n\
<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    ServerName localhost\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# منح صلاحيات كاملة للنظام (777 تعني فتح الأبواب للجميع)
RUN chown -R www-data:www-data /var/www/html && chmod -R 777 /var/www/html

EXPOSE 80

