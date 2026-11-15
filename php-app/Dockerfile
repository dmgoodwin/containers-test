FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html

COPY index-action.php .
COPY index.html .
COPY error500.html .

EXPOSE 80

