# Curso de Laravel 5.1 do Treinaweb

Esse curso tem como objetivo aplicar o que aprendemos em aula num projeto prático e incremental.

## Instruções para instalação

Ao termino de cada vídeo temos um arquivo zip contendo o que foi abordado naquele vídeo, as vezes com uma correção ou outra.

Para utilizar o projeto siga os passos abaixo:

 - Extraia o conteúdo completo do .zip no diretório do seu projeto
 - Execute no terminal o comando `composer install` para instalar as dependencias
   - Em algumas situações o comando acima pode dar erros. Isso acontece quando novas dependencias são incluidas durante as aulas. Para contornar isso, execute `composer install --no-scripts` assim o Laravel irá reconhecer as dependencias que estão faltando
 - Em seguida executa `composer project-clear` para limpar o cache da aplicação, das configs e as views compiladas
 - Caso a lição apresente alguma interação com o banco de dados, execute o `php artisan migrate` e depois `php artisan db:seed` para popular o banco de dados
 - Algumas lições exigem que outros comandos sejam executados para o correto funcionamento do projeto. Reveja o vídeo da aula específica e verifique o que precisa ser executado :)
 - Caso encontre algum outro problema, por favor entre em contato com o suporte