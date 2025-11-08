#!/bin/bash

# Run environment-dependent commands now that ENV is loaded
php /var/www/html/artisan config:cache
php /var/www/html/artisan view:cache
php /var/www/html/artisan migrate --force

# Start Supervisor to manage PHP-FPM and Nginx
exec /usr/bin/supervisord -c /etc/supervisord.conf