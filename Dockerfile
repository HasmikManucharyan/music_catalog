# Используем официальный образ PHP с установленным Nginx и поддержкой Laravel
FROM php:8.2-fpm

# Устанавливаем зависимости для работы с Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Устанавливаем Composer для управления зависимостями
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Создаем рабочую директорию
WORKDIR /var/www/html

# Копируем файлы проекта в контейнер
COPY . /var/www/html

# Устанавливаем зависимости Laravel
RUN composer install

# Устанавливаем права на директории хранения кэша и логов Laravel
RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

# Открываем порт 8000 для PHP
EXPOSE 8000


# Запустите Laravel через artisan serve
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
