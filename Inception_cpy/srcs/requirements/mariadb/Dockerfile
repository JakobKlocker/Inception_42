 #Get Base layer, debian
 FROM debian:buster
 
 #Update and install nginx & OpenSSL
 RUN	apt-get update
 RUN	apt-get install mariadb-server -y
 
 RUN mkdir -p /var/run/mysqld \
&& chown -R mysql:mysql /var/run/mysqld \
&& chmod 777 /var/run/mysqld
 
 #Copy my server conf to mysqp folder, so not only localhost can connect to the database
 COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d
 COPY ./tools/test.sh /
 RUN chmod 777 /test.sh
 
 EXPOSE 3306

 ENTRYPOINT ["./test.sh"]
 
 CMD ["mysqld_safe"]
