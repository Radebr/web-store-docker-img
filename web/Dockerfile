# استخدام صورة PHP مع Apache
FROM php:8.2-apache

# تثبيت الامتدادات الضرورية
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite

# نسخ ملفات الموقع
COPY . /var/www/html/

# نسخ ملف تكوين Apache (اختياري)
COPY web/apache-config.conf /etc/apache2/sites-available/000-default.conf

# تشغيل Apache
CMD ["apache2-foreground"]
