# Monitoring Apache and MySQL with ELK

- Start with:
    ```bash
    docker-compose up
    ```
- Enter to db container:
    - Enter to mysql as root with: 
        ```bash
        mysql -u root -p
        ```
    - Execute:
        ```mysql
        CREATE DATABASE testdb;
        USE testdb;
        CREATE TABLE IF NOT EXISTS tasks (
            task_id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )  ENGINE=INNODB;
        GRANT ALL PRIVILEGES ON testdb.* TO 'sys_admin'@'%';
        SET GLOBAL slow_query_log = 'on';
        ```
    - Return to bash and execute:
        ```bash
        filebeat setup
        service filebeat start
        ```
- Enter to web container and execute:
    ```bash
    filebeat setup
    service filebeat start
    ```
