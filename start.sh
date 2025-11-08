#!/bin/bash

# Ensure storage link exists
php /var/www/html/artisan storage:link || true

# Run Laravel commands safely
php /var/www/html/artisan config:cache
php /var/www/html/artisan route:cache
php /var/www/html/artisan view:cache
php /var/www/html/artisan migrate --force

# Start Supervisor to manage PHP-FPM and Nginx
exec /usr/bin/supervisord -c /etc/supervisord.conf
