FROM php:8.2-fpm


RUN curl -sSLf -o /usr/local/bin/install-php-extensions https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \

chmod +x /usr/local/bin/install-php-extensions

RUN install-php-extensions pdo_mysql 

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# apt-get update && apt-get install -y \
    # git unzip zip libicu-dev libonig-dev libxml2-dev libzip-dev \
    # && docker-php-ext-install intl pdo pdo_mysql zip
    
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN docker-php-ext-install pdo_mysql
# WORKDIR /var/www/html
# RUN composer install --no-interaction
