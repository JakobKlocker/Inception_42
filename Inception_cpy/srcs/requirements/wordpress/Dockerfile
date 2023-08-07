 #Get Base layer, debian
 FROM debian:buster
 
 #Update and install php-fpm
 RUN	apt-get update && apt-get upgrade -y
 RUN	apt install php-fpm php-mysql -y && apt install curl -y && apt-get install -y wget
 
 #Copy my www config
 COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/
 COPY ./conf/wp-config.php /
 COPY ./tool/wp_script.sh /
 RUN mkdir -p /run/php && chown www-data:www-data /run/php
 RUN chmod 777 /wp_script.sh
 RUN wget -O /usr/local/bin/wait-for-it.sh https://raw.githubusercontent.com/vishnubob/wait-for-it/master/wait-for-it.sh
 RUN chmod +x /usr/local/bin/wait-for-it.sh
 ENTRYPOINT ["/wp_script.sh"]
 
 CMD ["/usr/sbin/php-fpm7.3", "-F"]
