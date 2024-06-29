<?php
        require_once "POO.php";

  
   $camelo = new Test();

   

   $camelo->nome;

   echo $camelo->getNome();

   echo $camelo->printAtributtes();

   if( isset($_POST['enviar']) ){
        echo $camelo->printAtributtes();
   }


   <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <h1>Olá, mundo!</h1>

          <form action="" method="post">
                 <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome"  placeholder="Seu nome">
                </div>
                                <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email"  placeholder="Seu email">
                </div>
        <div class="form-group">
        <label for="about">Assunto</label>
        <input type="text" class="form-control" id="about" placeholder="Assunto">
</div>
<div class="form-group">
<label for="bairro"></label>
<input type="text" class="form-control" id="bairro"  placeholder="Bairro">
</div>

    <input type="submit" value="enviar" name="enviar" class="btn btn-primary">Enviar</button>
        </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>