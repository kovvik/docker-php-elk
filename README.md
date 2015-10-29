# docker-php-elk

This project is for testing/QA a PHP/MySQL application. It is created from several docker containers to monitor, log and measure things (ELK stack).

## Usage

Put your PHP project files in the php/www folder. If you have an initial database put your dump file into mysql/init.d/dump.sql

Use `docker-compose up` to start the containers. The containers are available at these TCP ports:

* The main PHP project: 80
* MySQL: 3306
* Kibana: 5601
* elasticsearch: 9200, 9300