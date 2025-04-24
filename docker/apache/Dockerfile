FROM php:8.2-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copier Composer depuis l'image officielle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Activer le module rewrite d'Apache
RUN a2enmod rewrite proxy proxy_fcgi

COPY docker/apache/conf/my-vhost.conf /etc/apache2/sites-available/my-vhost.conf
RUN a2ensite my-vhost.conf


# Copier les fichiers du projet dans le conteneur
WORKDIR /var/www/html
COPY . /var/www/html/

# Installer les dépendances avec Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Donner les permissions à Apache
RUN chown -R www-data:www-data /var/www/html