#!/bin/bash

# start.sh
# Start Supervisor to manage PHP-FPM and Nginx
exec /usr/bin/supervisord -c /etc/supervisord.conf
