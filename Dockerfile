# Use an official PHP runtime as a parent image
FROM php:8.1-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Enable mod_rewrite (optional)
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80