#!/bin/bash
set -e

# Laravel cache & migrations
php /var/www/html/artisan config:cache
php /var/www/html/artisan view:cache
php /var/www/html/artisan migrate --force

# Start Supervisor (manages Nginx + PHP-FPM)
exec /usr/bin/supervisord -c /etc/supervisord.conf
