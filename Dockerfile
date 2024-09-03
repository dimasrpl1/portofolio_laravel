# Gunakan image PHP dengan versi yang sesuai
FROM php:8.0-fpm

# Install dependensi
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libzip-dev git unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install mbstring zip pdo pdo_mysql

# Set working directory
WORKDIR /var/www

# Copy composer.lock and composer.json
COPY composer.lock composer.json ./

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependencies
RUN composer install

# Copy application code
COPY . .

# Expose port
EXPOSE 80

# Start PHP-FPM server
CMD ["php-fpm"]
