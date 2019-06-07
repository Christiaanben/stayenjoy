FROM php:apache
RUN apt-get update -y
EXPOSE 80

WORKDIR /var/www/html
COPY . /var/www/html

ENTRYPOINT ["apache2ctl"]
CMD ["-DFOREGROUND"]
