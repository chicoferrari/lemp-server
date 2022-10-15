LEMP SERVER EXAMPLES:
```
Branch name          Description
---------------------------------------------------------------
grandLine            a basic lemp server
part2                using a lightweight images
* part3              add a bash script for easily management
part4                add tls/ssl certificates into environment


1. add this function on .bashrc or .zshrc: 

function demo {
    cd /PATH/TO/YOUR/PROJECT && bash demo $*
        cd -
}


2. edit /etc/hosts:

127.0.0.1   php.webdev.test   phpmyadmin.webdev.test


3. restart service:

systemctl restart systemd-hostnamed.service 


4. start environment:

docker-compose up --build -d


5. check services (on-browser):

php.webdev.test
phpmyadmin.webdev.test

6. test script (on terminal):

webdev

```
