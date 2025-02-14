# Menggunakan image PHP dengan Nginx
FROM php:8.2-fpm

# Instalasi dependensi sistem
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip \
    && docker-php-ext-install pdo pdo_mysql

# Instalasi Node.js dan npm
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Menyalin file composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Menetapkan direktori kerja
WORKDIR /var/www

# Menyalin semua file aplikasi
COPY . .

# Menyalin file .env
COPY .env ./

# Menginstal dependensi Laravel
RUN composer install

# Menginstal dependensi npm
RUN npm install

# Menjalankan build untuk frontend
RUN npm run development

# Mengatur hak akses untuk storage dan bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port yang digunakan
EXPOSE 9000

# Menjalankan PHP-FPM
CMD ["php-fpm"]
