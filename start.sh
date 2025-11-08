#!/bin/bash

# Ensure directories have correct permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Run environment-dependent commands now that ENV is loaded
php /var/www/html/artisan config:cache
php /var/www/html/artisan view:cache

# Wait until database is ready, then migrate
until php /var/www/html/artisan migrate --force; do
    echo "Waiting for database..."
    sleep 5
done

# Start Supervisor to manage PHP-FPM and Nginx
exec /usr/bin/supervisord -c /etc/supervisord.conf
