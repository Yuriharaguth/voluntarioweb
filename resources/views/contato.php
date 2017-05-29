<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
  
    <title>Voluntarios</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= url('/') ?>">Voluntarios</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?= url('/') ?>">Home</a></li>
            <li><a href="<?= route('sobre') ?>">Sobre</a></li>
            <li><a href="<?= route('contato') ?>">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div>
        <h1>Entre em contato:</h1>
        <form action="<?= route('contato.send') ?>" method="POST">
          
          <?= csrf_field(); ?>
          
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome">
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          
          <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" name="mensagem" rows="3"></textarea>
          </div>
          
          <button type="submit" class="btn btn-default">Enviar</button>
          
        </form>
      </div>

    </div><!-- /.container -->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

  </body>
</html>
