FROM php:8.2-cli

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html

CMD ["php", "-S", "0.0.0.0:8000"]

