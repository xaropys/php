<html lang="pt-br">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro Produto</title>
  </head>
  <body>

  <div class="container">
  
  
   
    <?php require  "includes/menu.php";  ?>
   
    <h1>cadastro Produto</h1>
     
    
<form method="post" action="acao/acaoProduto.php" enctype="">
  <div class="form-group">
    <label for="produto">Nome do Produto</label>
    <input type="text" class="form-control" name="produto" id="produto" aria-describedby="emailHelp" placeholder="produto">
    </div>
  <div class="form-group">
    <label for="produto2">categoria do produto</label>
    <input type="text" class="form-control" name="categoria" id="produto2" aria-describedby="emailHelp" placeholder="categoria">
  </div>
  <div class="form-group">
    <label for="produto3">Photo </label>
    <input type="file" class="form-control" name="photo" id="produto3" aria-describedby="emailHelp" placeholder="Photo">
  </div>
  <label for="textarea">Message</label>
        <textarea class="form-control" name="textarea" rows="3"></textarea>
  </div>
  </div>
  <button type="submit" name="enviar" value="cadastrar Pais" class="btn btn-primary">Enviar</button>
</form>
   <?php require  "includes/rodape.php"; ?>

</div>

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
