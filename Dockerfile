FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN a2enmod rewrite

COPY . /var/www/html

# بحث تلقائي عن ملف index.php ووضعه في المجلد الصحيح إذا كان مفقوداً
RUN if [ ! -f "/var/www/html/public/index.php" ]; then \
    find /var/www/html -name "index.php" -exec cp {} /var/www/html/public/index.php \; ; \
    fi

# إعدادات Apache النهائية
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# صلاحيات كاملة
RUN chown -R www-data:www-data /var/www/html && chmod -R 777 /var/www/html

EXPOSE 80
