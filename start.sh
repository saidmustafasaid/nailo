#!/bin/bash
# start.sh - Startup script for Laravel Docker container

# OPTIONAL: Clear and cache config/views here if needed,
# but temporarily remove the cache commands if 500 persists.
# php /var/www/html/artisan config:clear
# php /var/www/html/artisan view:clear

# Ensure permissions are correct
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Run database migrations
php /var/www/html/artisan migrate --force

# Start supervisord in foreground
exec /usr/bin/supervisord -n -c /etc/supervisord.conf