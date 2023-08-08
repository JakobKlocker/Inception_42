#!/bin/bash

echo "CREATE DATABASE IF NOT EXISTS $db_name;" > tmp.sql
echo "CREATE USER IF NOT EXISTS '$db_user'@'%' IDENTIFIED BY '$db_pass';" >> tmp.sql
echo "GRANT ALL PRIVILEGES ON $db_name.* TO '$db_user'@'%';" >> tmp.sql
echo "FLUSH PRIVILEGES;" >> tmp.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$db_pass';" >> tmp.sql
echo "FLUSH PRIVILEGES;" >> tmp.sql

service mysql start

sleep 1
 
mysql -u root -p$db_pass < tmp.sql

kill $(cat /var/run/mysqld/mysqld.pid)

exec "$@"
