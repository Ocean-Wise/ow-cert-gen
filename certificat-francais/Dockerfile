FROM kstaken/apache2
LABEL name "ow-certificate-french"
RUN apt-get update && apt-get install -y php5 libapache2-mod-php5 php5-mysql php5-cli && apt-get clean && rm -rf /var/lib/apt/lists/*
RUN mkdir /var/www/images
RUN mkdir /var/www/includes
COPY src/* /var/www/
COPY src/images /var/www/images
COPY src/includes /var/www/includes
RUN rm /var/www/index.html
RUN mv /var/www/index.php /var/www/index.html
RUN chown -R www-data:www-data /var/www/

EXPOSE 80
CMD ["/usr/sbin/apache2", "-D", "FOREGROUND"]
