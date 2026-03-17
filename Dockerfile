FROM php:8.2-apache
RUN a2enmod rewrite
COPY . /var/www/html
RUN chmod -R 777 /var/www/html

RUN TARGET=$(find /var/www/html -type d -name "public" | head -n 1); \
    if [ -z "$TARGET" ]; then \
    mkdir -p /var/www/html/public && \
    echo "<?php echo '<h2 style=\"font-family:sans-serif;text-align:center;margin-top:20%;\">السيرفر يعمل بنجاح 100% &#9989;<br>لكن ملفات Laravel مفقودة من GitHub!</h2>'; ?>" > /var/www/html/public/index.php; \
    TARGET="/var/www/html/public"; \
    fi; \
    sed -i "s|/var/www/html|$TARGET|g" /etc/apache2/sites-available/000-default.conf

RUN echo "<Directory /var/www/>" >> /etc/apache2/apache2.conf && \
    echo "    AllowOverride All" >> /etc/apache2/apache2.conf && \
    echo "    Require all granted" >> /etc/apache2/apache2.conf && \
    echo "</Directory>" >> /etc/apache2/apache2.conf

EXPOSE 80
