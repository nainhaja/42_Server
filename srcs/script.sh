#!bin/bash
export DEBIAN_FRONTEND=noninteractive

apt update -y

service php7.3-fpm start

service mysql start
mysql -u root -e 'CREATE USER "wp_user"@"localhost" IDENTIFIED BY "test123";'
mysql -u root -e "CREATE DATABASE wordpress; USE wordpress; source /wordpress.sql; source /phpmyadmin.sql;"
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* to 'wp_user'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"

nginx -g 'daemon off;'

