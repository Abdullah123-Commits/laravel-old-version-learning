FROM php:7.1-cli

# Replace old Debian sources with archived ones
RUN sed -i 's/deb.debian.org/archive.debian.org/g' /etc/apt/sources.list && \
    sed -i 's|security.debian.org|archive.debian.org|g' /etc/apt/sources.list && \
    echo 'Acquire::Check-Valid-Until "false";' > /etc/apt/apt.conf.d/99no-check-valid-until

# Install required packages
RUN apt-get update && apt-get install -y \
    unzip zip git curl libzip-dev libxml2-dev \
    && docker-php-ext-install zip mbstring xml

WORKDIR /app

COPY . /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --ignore-platform-reqs

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]


