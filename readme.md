# Laravel 5.1.11

Esse projeto tem como objetivo praticar o conhecimento do framework Laravel.

São necessarios os seguintes itens:
- PHP 5.5.9 ou superior
- Composer (Gerenciador de dependências)

## Instruções para instalação

Após clonar o projeto

Para utilizar o projeto siga os passos abaixo:

 - Configurar acesso ao banco no arquivo .env, com base no modelo env.exemple. O banco de dados deve estar previamente criado
 - Execute no terminal o comando `composer install` para instalar as dependencias
 - Em seguida executa `composer project-clear` para limpar o cache da aplicação, das configs e as views compiladas
 - Execute o `php artisan migrate` e depois `php artisan db:seed` para popular o banco de dados com as informações minimas para o funcionamento do projeto.
