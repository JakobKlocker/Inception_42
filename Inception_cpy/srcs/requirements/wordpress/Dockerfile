 #Get Base layer, debian
 FROM debian:buster
 
 #Update and install php-fpm
 RUN	apt-get update && apt-get upgrade -y
 RUN	apt install php-fpm php-mysql -y && apt install curl -y
  RUN	apt-get install mariadb-server -y
 
 #Copy my www config
 COPY ./conf/www.conf /etc/php/8.1/fpm/pool.d/
 COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/
 COPY ./conf/wp-config.php /
 COPY ./tool/wp_script.sh /
 RUN mkdir -p /run/php && chown www-data:www-data /run/php
 RUN chmod 777 /wp_script.sh
 ENTRYPOINT ["/wp_script.sh"]
 
 CMD ["/usr/sbin/php-fpm7.3", "-F"]
