# Use PHP-FPM Alpine
FROM php:8.2-fpm-alpine

# Install essential packages
RUN apk update && apk add --no-cache \
    nginx \
    supervisor \
    curl \
    git \
    libxml2-dev \
    autoconf \
    g++ \
    make \
    bash \
    postgresql-dev \
    openssl

# Create log directories - FIX: Changed /var/log/supervisor to /var/log/supervisord
RUN mkdir -p /var/log/supervisord /var/log/nginx /var/log/php-fpm /etc/nginx/ssl

# Install PHP extensions
RUN docker-php-ext-install pdo_pgsql opcache

# Set working directory
WORKDIR /var/www/html

# Copy application
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev

# Set Laravel permissions
RUN php artisan storage:link || true
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Expose port 8000 (Render's expected port)
EXPOSE 8000

# Copy config files
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY start.sh /usr/local/bin/start

# Make start script executable
RUN chmod +x /usr/local/bin/start

# SSL certificates and generation (kept for completeness, but Nginx config ignores them)
COPY docker/ssl/nginx.crt /etc/nginx/ssl/nginx.crt
COPY docker/ssl/nginx.key /etc/nginx/ssl/nginx.key
RUN [ ! -f /etc/nginx/ssl/nginx.crt ] && \
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -subj "/C=TZ/ST=Tanzania/L=Dar es Salaam/O=Nailo Smart Company/CN=localhost" \
    -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt || true

# Start container
CMD ["/usr/local/bin/start"]