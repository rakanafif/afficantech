FROM php:8.2-apache

# 1. تثبيت أدوات النظام و برنامج Composer
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN a2enmod rewrite

WORKDIR /var/www/html

# 2. تحميل "محرك Laravel" الأساسي لتعويض كل الملفات المفقودة
RUN composer create-project --prefer-dist laravel/laravel:^10.0 temp_core
RUN cp -a temp_core/. /var/www/html/ && rm -rf temp_core

# 3. نسخ ملفاتك المخصصة من GitHub ودمجها مع المحرك
COPY . /var/www/html/

# 4. إعطاء الصلاحيات اللازمة للمجلدات
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

# 5. توجيه السيرفر لمجلد public الذي تم إنشاؤه للتو
RUN printf "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf

EXPOSE 80
