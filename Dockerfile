FROM php:8.2-apache

RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN a2enmod rewrite

COPY . /var/www/html

# إنشاء المجلد وملف اختبار للرؤية
RUN mkdir -p /var/www/html/public
RUN if [ ! -f /var/www/html/public/index.php ]; then echo "<?php echo '<h1 style=\"text-align:center; margin-top:50px;\">السيرفر يعمل بنجاح يا راكان! &#127881;</h1><p style=\"text-align:center;\">الآن نحن بحاجة لترتيب ملفات Laravel في GitHub.</p>'; ?>" > /var/www/html/public/index.php; fi

RUN echo '<Directory /var/www/html/>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n\
<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html && chmod -R 777 /var/www/html

EXPOSE 80
