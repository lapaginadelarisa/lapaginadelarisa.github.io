FROM php:8.0-apache

# Copia el código de tu aplicación al contenedor
COPY . /var/www/html/

# Abre el puerto 80 para la aplicación web
EXPOSE 80
