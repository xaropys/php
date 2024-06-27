
<html lang="pt-br">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Bem Vindo</title>
  </head>
  <body>


    <?
    php require  "sistema/includes/menu.php";
    
     session_start();
     if(isset($_POST['enviar'])){
         $user = $_POST['user'];
         $password = $_POST['senha'];

         if($user == "senac@gmail.com" && $password == "123a"){
           $_SESSION['logar'] = TRUE;
           header("Location: admin/index.php");
         }else{
           echo "Verifique seu usuário e senha";
         }
     }else {
       echo "clique no botao";
     }

   ?>

   <div class="container">


<h1>Faça seu Login!</h1>

    <form action="sistema/admin/index.php" method="post" autocomplete="off">
    <div class="form-group">
      <label for="email">Endereço de email</label>
      <input type="email" class="form-control" name="user" id="email" aria-describedby="emailHelp" placeholder="Seu email">
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password" name="password" class="form-control"  placeholder="Senha">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Destruir a Venezuela com galinhas de angola</label>
    </div>
    <button name="enviar" type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
      

      <?php require  "sistema/includes/rodape.php"; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
