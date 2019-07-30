FROM php:apache
RUN apt-get update -y
EXPOSE 80

ENTRYPOINT ["apache2ctl"]
CMD ["-DFOREGROUND"]
