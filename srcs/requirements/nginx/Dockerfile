 #Get Base layer, debian
 FROM debian:buster
 
 #Update and install nginx & OpenSSL
 RUN	apt-get update && apt-get upgrade -y
 RUN	apt install -y nginx 
 RUN	apt install -y openssl
 
 #Copy my index.html to nginx html folder
 COPY ./conf/default /etc/nginx/sites-available
 
 #Create SLL Certificate
 RUN openssl req -x509 -nodes -days 365 \
 -newkey rsa:2048 \
 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt \
 -subj "/C=AT/L=VI/O=Vienna/OU=student/CN=jklocker"
 
 EXPOSE 443
 
 CMD ["nginx", "-g", "daemon off;"]
