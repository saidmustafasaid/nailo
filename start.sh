#!/bin/bash
# start.sh - Startup script for Laravel Docker container

# Ensure permissions are correct BEFORE running storage:link
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# FIX: Re-create the storage link at runtime to ensure it points correctly
# to the storage/app/public directory inside the container.
php /var/www/html/artisan storage:link || true

# Run database migrations
php /var/www/html/artisan migrate --force

# Start supervisord in foreground
exec /usr/bin/supervisord -n -c /etc/supervisord.conf