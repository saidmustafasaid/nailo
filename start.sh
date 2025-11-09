#!/bin/bash
# start.sh - Startup script for Laravel Docker container

# Ensure permissions are correct
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Start supervisord in foreground
exec /usr/bin/supervisord -n -c /etc/supervisord.conf
