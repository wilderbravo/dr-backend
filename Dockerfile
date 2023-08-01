# Usamos la imagen oficial de PHP con Apache para Laravel
FROM php:7.4-apache

# Instalamos dependencias de Laravel y extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Copiamos el archivo de configuración personalizado
COPY apache2.conf /etc/apache2/apache2.conf

# Establecemos el directorio de trabajo
WORKDIR /var/www/html

# Copiamos los archivos de Laravel al contenedor
COPY . .

# Configuramos permisos adecuados para el usuario de Apache
# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponemos el puerto 80 para el servidor web
EXPOSE 80

# Comando para ejecutar el servidor web de Laravel
CMD ["apache2-foreground"]

