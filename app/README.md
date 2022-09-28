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

php artisan make:model <NAME> -mf
php artisan make:migration <NAME>
php artisan make:controller APi/<NameController> --resource --api

### Ajustando erros de permissão
chmod -R 777 /var/www/php/