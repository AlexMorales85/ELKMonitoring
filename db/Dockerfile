FROM mysql:8.0

RUN apt update && apt install wget -y && \
    wget -qO - https://artifacts.elastic.co/GPG-KEY-elasticsearch | apt-key add - && \
    apt remove wget  -y && \
    apt install apt-transport-https -y && \
    echo "deb https://artifacts.elastic.co/packages/7.x/apt stable main" | tee -a /etc/apt/sources.list.d/elastic-7.x.list && \
    apt update && apt install filebeat -y && \
    filebeat modules enable mysql