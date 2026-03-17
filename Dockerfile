FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN a2enmod rewrite

COPY . /var/www/html

# سكريبت ذكي للتأكد من وجود المجلد وضبط الصلاحيات
RUN if [ ! -d "/var/www/html/public" ]; then mkdir -p /var/www/html/public; fi

# إعداد Apache ليكون مرناً
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# منح صلاحيات كاملة لكل شيء لتخطي أي عوائق
RUN chown -R www-data:www-data /var/www/html && chmod -R 777 /var/www/html

EXPOSE 80
