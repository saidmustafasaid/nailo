# Use PHP 8.2 FPM Alpine image
FROM php:8.2-fpm-alpine

# Install essential packages
RUN apk update && apk add --no-cache \
    nginx \
    supervisor \
    bash \
    curl \
    git \
    libxml2-dev \
    autoconf \
    g++ \
    make \
    postgresql-dev \
    shadow \
    unzip \
    vim \
    && docker-php-ext-install pdo_pgsql opcache

# Create log directories
RUN mkdir -p /var/log/supervisor /var/run/php \
    && chown -R www-data:www-data /var/log/supervisor /var/run/php

# Set working directory
WORKDIR /var/www/html

# Copy app files
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R ug+w storage bootstrap/cache

# Expose Render port
EXPOSE 8000

# Copy configuration files
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY start.sh /usr/local/bin/start

# Make start script executable
RUN chmod +x /usr/local/bin/start

# Default command
CMD ["/usr/local/bin/start"]
