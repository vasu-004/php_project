#!/usr/bin/env bash
set -e

# Start PHP-FPM as a daemon
php-fpm -D

# Run Nginx in the foreground (keeps container alive)
exec nginx -g 'daemon off;'
