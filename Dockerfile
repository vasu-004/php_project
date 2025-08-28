# PHP-FPM base
FROM php:8.2-fpm

# Install Nginx and tools
RUN apt-get update && apt-get install -y --no-install-recommends \
    nginx git unzip zip ca-certificates \
 && rm -rf /var/lib/apt/lists/*

# Bring in Composer (multi-stage copy from official image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Nginx site config
RUN rm -f /etc/nginx/sites-enabled/default /etc/nginx/sites-available/default || true
COPY nginx/default.conf /etc/nginx/sites-available/default
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# App code -> /var/www/htm
COPY sample-php/ /var/www/html/

# Permissions (www-data is the web user)
RUN chown -R www-data:www-data /var/www/html

# Install PHP dependencies if composer.json exists
WORKDIR /var/www/html
RUN if [ -f "composer.json" ]; then composer install --no-dev --prefer-dist --no-interaction; fi

# Copy startup script
COPY start.sh /start.sh
RUN chmod +x /start.sh
# Optional metadata (does not publish ports)
EXPOSE 80

# Start both services
CMD ["/start.sh"]
