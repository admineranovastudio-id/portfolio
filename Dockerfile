# Gunakan image PHP 8.3 dengan Apache
FROM php:8.3-apache

# Mengaktifkan mod_rewrite Apache (wajib untuk Laravel)
RUN a2enmod rewrite

# Mengatur DocumentRoot ke direktori public Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Menginstal dependensi sistem dan ekstensi PHP yang direkomendasikan
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure intl \
    && docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd zip intl

# Menginstal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Mengatur direktori kerja
WORKDIR /var/www/html

# Menyalin file composer (optimasi cache layer Docker)
COPY composer.json composer.lock ./

# Menginstal dependensi Laravel
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --ignore-platform-reqs

# Menyalin seluruh file proyek ke dalam kontainer
COPY . .

# Melakukan dump-autoload
RUN composer dump-autoload --optimize --no-scripts

# Menyesuaikan permission folder agar dapat ditulis oleh web server (Apache)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Mengekspos port 80
EXPOSE 80

# Menjalankan Apache di foreground
CMD ["apache2-foreground"]
