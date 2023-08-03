#!/bin/bash

echo "CREATE DATABASE IF NOT EXISTS mydb;" > tmp.sql
echo "CREATE USER IF NOT EXISTS 'jakob'@'%' IDENTIFIED BY '12345678';" >> tmp.sql
echo "GRANT ALL PRIVILEGES ON mydb.* TO 'jakob'@'%';" >> tmp.sql
echo "FLUSH PRIVILEGES;" >> tmp.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '12345678';" >> tmp.sql
echo "FLUSH PRIVILEGES;" >> tmp.sql

service mysql start

sleep 1
 
mysql -u root -p12345678 < tmp.sql

kill $(cat /var/run/mysqld/mysqld.pid)

exec "$@"
