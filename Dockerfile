# Use a high-quality base image with PHP and Composer
FROM php:8.2-fpm-alpine

# Install essential packages
RUN apk update && apk add \
    nginx \
    supervisor \
    curl \
    git \
    libxml2-dev \
    autoconf \
    g++ \
    make \
    bash

# FIX: Create log directories required by supervisor BEFORE it starts
RUN mkdir -p /var/log/supervisor
    
# Install PHP extensions required by Laravel
RUN docker-php-ext-install pdo_mysql opcache

# Set working directory inside the container
WORKDIR /var/www/html

# Copy application files 
COPY . .

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev

# FIX: Clear config/cache to force loading of PostgreSQL settings (CRUCIAL FIX)
RUN php artisan config:clear
RUN php artisan cache:clear

# FIX: RUN MIGRATIONS DURING BUILD (Needed since Shell is disabled on Free Tier)
# This will create your database tables immediately after installing Composer.
RUN php artisan migrate --force

# Configure Laravel (key:generate is removed, done via ENV)
RUN php artisan storage:link
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 8000 (Render's default)
EXPOSE 8000

# Copy necessary configuration files
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY start.sh /usr/local/bin/start

# Ensure the start script is executable
RUN chmod +x /usr/local/bin/start

# Run the startup script with its absolute path
CMD ["/usr/local/bin/start"]