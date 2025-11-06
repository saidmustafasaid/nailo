# Use a high-quality base image with PHP and Composer
FROM php:8.2-fpm-alpine

# Install essential packages
RUN apk update && apk add     nginx     supervisor     curl     git     libxml2-dev     autoconf     g++     make

# Install PHP extensions required by Laravel
RUN docker-php-ext-install pdo_mysql opcache

# Set working directory inside the container
WORKDIR /var/www/html

# Copy application files (excluding vendor and node_modules if present)
COPY . .

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev

# Configure Laravel
RUN php artisan key:generate --force
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

# Run the startup script when the container launches
CMD ["start"]
