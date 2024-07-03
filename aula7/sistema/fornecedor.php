<?php

    require_once "system.php";
    require_once "product.php";
    require_once "client.php";
     
    $system = new System();
    $product = new Product();
    $client = new Client();

if (isset($_POST['enviar']) ){
     echo $client->atributosClient();
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
  <div class="container">
  
    <h1>Olá, mundo!</h1>

    <form method="post" action="acao/indexAction.php">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Seu nome">
    </div>
    <div class="form-group">
        <label for="CP">CP</label>
        <input type="email" class="form-control" id="CP" aria-describedby="emailHelp" placeholder="CP agora">
    </div>
  <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" id="message" rows="3"></textarea>
</div>
    <input type="submit" id="enviar" name="envia<r" class="btn btn-primary">Send nud(k)es</button>
  </form>

  </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>