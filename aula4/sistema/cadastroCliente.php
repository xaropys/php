<html lang="pt-br">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>

  <div class="container">
    <?php
     require "includes/menu.php"; 
     
     session_start();

     if (
      isset($_POST['enviar'])) {
         if (!isset($_SESSION['logar'])) {
            echo "<script>alert('Welcome / Bem Vindo');</script>";
         } else {
            header("Location: ../index.php");
            session_destroy();
         }
      }

    ?>
   
    <h1>Cadastro Cliente</h1>
<form method="post" action="acao/cliente.php">
    <div class="row">
      <div class="col-md-12">
      <form>
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome"  placeholder="Seu nome">
       
            </div>
       </div>
    </div>

    <div class="row">
          <div class="col-md-4"> 
     <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf"  placeholder="Seu cpf">
          </div>
     </div>

      <div class="col-md-4"> 
        <div class="form-group">
          <label for="nascimento">Numero de Nascimento</label>
          <input type="date" class="form-control" id="nascimento"  placeholder="Sua data de Nascimento">
        </div>
      </div>

      <div class="col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1">
            <label class="form-check-label" name="masculino" for="exampleRadios1">Masculino</label>
         </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2">
            <label class="form-check-label" name="feminino" for="exampleRadios2">Feminino</label>
        </div>
      </div>
    </div>


<div class="row">
      <div class="col-md-6">
          <div class="form-group">
                <label for="estadoCivil">Estado Civil</label>
                  <select name="estadoCivil" class="form-control">
                    <option name="casado">Casado</option>
                    <option name="dandoAbunda">Dando a bunda no matagal</option>
                    <option name="jogadorDeSoulsLike">Jogador de Souls Like</option>
                  </select>
          </div>
      </div>
          <div class="col-md-6">
            <div class="form-group">
             <label for="renda">Renda Mensal</label>
             <input type="text" class="form-control" id="renda"  placeholder="0,00">
           </div>
          </div>
</div>
<h1>  Endereço</h1>
    <div class="row">
      
      <div class="col-md-4"> 
        
          <div class="form-group">
             <label for="logradouro">Logradouro</label>
             <input type="text" class="form-control" id="logradouro"  placeholder="logradouro">
        </div>
      </div>

      <div class="col-md-4">      
        <div class="form-group">
             <label for="numero">Numero</label>
             <input type="text" class="form-control" id="numero"  placeholder="N°">
          </div>
        </div>
      <div class="col-md-4">
        <div class="form-group">
             <label for="complemento">Complemento</label>
             <input type="text" class="form-control" id="complemento"  placeholder="complemento /apto/ casa">
          </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
                <label for="estado">Estado</label>
                  <select name="estado" class="form-control">
                    <option name="Parana">Parana</option>
                    <option name="RioGrandeDoSul">Rio Grande do Sul</option>
                    <option name="Corrientes">Corrientes</option>
                    <option name="SantaCatarina">Santa Catarina</option>
                  </select>
                
          </div>
      </div>'
      <div class="col-md-6">
      <div class="form-group">
             <label for="cidade">Cidade</label>
             <input type="text" class="form-control" id="cidade"  placeholder="Caxias do Sul">
             <br>
             <button type="submit" class="btn btn-primary">Enviar</button>
             <br>
        </div>
      </div>
    </div>
</form>
   <?php require  "includes/rodape.php"; ?> 
</div>

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
