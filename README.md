# Laravel Project Manager

### Rodando o servidor
sudo docker compose up --build

## Entre no terminal
sudo docker exec -it php-apache bash

### Criando projeto Laravel
composer create-project laravel/laravel .

### Atualize
composer update

### Gere a key da aplicação
php artisan key:generate 

### Gerar Migrate
php artisan migrate

### Ajustando erros de permissão
chmod -R 777 /var/www/php/

## Creditos de imagem

As imagens que representam os restaurante e pratos foram obtidas do site [unsplash](unsplash), que armazena imagens gratuitas. Abaixo os créditos aos autores das imagens:

[Bonnie Kittle](https://unsplash.com/s/photos/computer?utm_source=unsplash)
[Christin Hume](https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText)