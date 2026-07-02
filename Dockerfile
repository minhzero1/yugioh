FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libsqlite3-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_sqlite zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --optimize-autoloader --no-dev

RUN mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache storage/logs
RUN chmod -R 775 storage bootstrap/cache

RUN touch database/database.sqlite

CMD php artisan config:clear && php artisan migrate --force && php -d display_errors=1 -d error_reporting=E_ALL artisan serve --host=0.0.0.0 --port=$PORT