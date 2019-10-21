FROM php:7.2-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && \
    apt update && apt install wget -y &&  apt install -y gnupg2 && \
    wget -qO - https://artifacts.elastic.co/GPG-KEY-elasticsearch | apt-key add - && \
    apt remove wget -y && \
    apt install apt-transport-https -y && \
    echo "deb https://artifacts.elastic.co/packages/7.x/apt stable main" | tee -a /etc/apt/sources.list.d/elastic-7.x.list && \
    apt update && apt install filebeat -y && \
    filebeat modules enable apache && \
    unlink /var/log/apache2/access.log && unlink /var/log/apache2/error.log && unlink /var/log/apache2/other_vhosts_access.log