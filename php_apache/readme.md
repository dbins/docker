# Docker - PHP

Exemplo de containers Docker para uma aplicação PHP com Apache. 

O arquivo Dockerfile possui as seguintes imagens:

- Apache
- PHPMyAdmin
- PHP
- MySQL

No arquivo apache\demo.apache.conf, na linha 9

ProxyPassMatch ^/(.*\.php(/.*)?)$ fcgi://app_php:9000/var/www/html/$1

o "app_php" é o nome da imagem que foi informado no arquivo dockerfile

