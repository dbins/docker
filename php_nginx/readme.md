# Docker - PHP

Exemplo de containers Docker para uma aplicação PHP com Nginx. 

O arquivo Dockerfile possui as seguintes imagens:

- Nginx
- PHPMyAdmin
- PHP
- MySQL

No arquivo nginx\site.conf, na linha 13

fastcgi_pass php_nginx:9000;

o "php_nginx" é o nome da imagem que foi informado no arquivo dockerfile

Na pasta mysql\initial_data

Ficam os dados para criar as tabelas do banco de dados MySQL. O conteúdo desta pasta apenas é executado quando é criado o container.