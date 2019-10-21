# Monitoring Apache and MySQL with ELK

- Start with docker-compose up
- Enter to db container:
    - enter to mysql as root with: mysql -u root -p
    - execute:
        CREATE DATABASE testdb;
        USE testdb;
        CREATE TABLE IF NOT EXISTS tasks (
            task_id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )  ENGINE=INNODB;
        GRANT ALL PRIVILEGES ON testdb.* TO 'sys_admin'@'%';
        SET GLOBAL slow_query_log = 'on';
    - return to bash and execute:         
        - filebeat setup
        - service filebeat start
- Enter to web container and execute:
    - filebeat setup
    - service filebeat start