FROM php:8.2-apache
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl
RUN a2enmod rewrite
COPY . /var/www/html
RUN printf "<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
EXPOSE 80
