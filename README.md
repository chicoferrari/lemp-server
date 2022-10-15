LEMP SERVER EXAMPLES:
```
Branch name          Description
---------------------------------------------------------------
grandLine            a basic lemp server
* part2              using a lightweight images
part3                add a bash script for easily management
part4                add tls/ssl certificates into environment


1. edit /etc/hosts:

127.0.0.1   php.webdev.test   phpmyadmin.webdev.test


2. restart service:

systemctl restart systemd-hostnamed.service 


3. start environment:

docker-compose up --build -d


4. check services (on-browser):

php.webdev.test
phpmyadmin.webdev.test
```
