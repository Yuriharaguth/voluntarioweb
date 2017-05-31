# Laravel 5.1.11

Esse projeto tem como objetivo praticar o conhecimento do framework Laravel.

## Instruções para instalação

Após clonar o projeto

Para utilizar o projeto siga os passos abaixo:

 - Configurar acesso ao banco no arquivo .env, o banco de dados deve estar previamente criado
 - Execute no terminal o comando `composer install` para instalar as dependencias
 - Em seguida executa `composer project-clear` para limpar o cache da aplicação, das configs e as views compiladas
 - Execute o `php artisan migrate` e depois `php artisan db:seed` para popular o banco de dados com as informações minimas para o funcionamento do projeto.
