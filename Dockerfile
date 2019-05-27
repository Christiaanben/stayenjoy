FROM ubuntu:latest
RUN apt-get update -y
RUN apt-get install -y apache2
RUN apt-get install -y apache2-utils
EXPOSE 80

RUN rm -R /var/www/html
RUN mkdir /var/www/html
WORKDIR /var/www/html
COPY . /var/www/html

ENTRYPOINT ["apache2ctl"]
CMD ["-DFOREGROUND"]
