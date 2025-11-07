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
    bash \
    postgresql-dev  # <-- ADDED for Postgres client library

# FIX: Create log directories required by supervisor BEFORE it starts
RUN mkdir -p /var/log/supervisor
    
# Install PHP extensions required by Laravel
# FIX: Using pdo_pgsql instead of pdo_mysql
RUN docker-php-ext-install pdo_pgsql opcache

# Set working directory inside the container
WORKDIR /var/www/html

# Copy application files 
COPY . .

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev

# FIX: All ENVIRONMENT-DEPENDENT Artisan commands (migrate, cache) are run via start.sh

# Configure Laravel 
RUN php artisan storage:link
RUN chown -R www-data:www-data storage bootstrap/cache
# FIX 1: Set explicit write permissions for the web user on storage and logs
RUN chmod -R ug+w storage bootstrap/cache

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