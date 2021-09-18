from debian:buster 
EXPOSE 80 443
ENV DEBIAN_FRONTEND=noninteractive
RUN apt update -y
RUN apt upgrade -y
RUN apt install nginx -y
RUN apt-get install php7.3-fpm php-mysqli php-cgi php-common php-phpseclib php-mysql php-pear php-mbstring php-gettext -y 

RUN apt install wget -y
RUN apt install dpkg -y
RUN apt install gnupg -y lsb-release

COPY /srcs/default /etc/nginx/sites-available/
COPY /srcs/info.php /var/www/html/

RUN wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb
RUN echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections
RUN dpkg -i mysql-apt-config*
RUN apt update -y
RUN apt-get install mysql-server -y

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz
RUN mkdir /var/www/html/phpmyadmin
RUN tar xzf phpMyAdmin-5.0.4-english.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin
RUN mkdir -p /var/lib/phpmyadmin/tmp
RUN chown -R www-data:www-data /var/lib/phpmyadmin
COPY /srcs/config.inc.php /var/www/html/phpmyadmin

RUN wget https://wordpress.org/latest.tar.gz
RUN tar xvf latest.tar.gz
RUN mv /wordpress /var/www/html/
COPY /srcs/wp-config.php /var/www/html/wordpress/
COPY /srcs/wordpress.sql /
COPY /srcs/phpmyadmin.sql /

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=MA/ST=BENGUERIR/L=RIAD/O=nainhaja/OU=Org/CN=localhost"
COPY /srcs/self-signed.conf /etc/nginx/snippets

COPY /srcs/script.sh /
CMD sh script.sh
