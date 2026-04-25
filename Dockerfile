FROM php:8.3-cli

# Instalamos el driver de MySQL
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html