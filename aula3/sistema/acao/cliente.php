<?php
      if( isset($_POST['enviar']) ) {
         $pais = $_POST['pais'];
         $cpf = $_POST['cpf'];
         $nascimento = $_POST['nascimento'];
         $complemento = $_POST['complemento'];
         $estadoCivil = $_POST['estadoCivil'];
         $feminino = $_POST['feminino'];
         $masculino = $_POST['masculino'];
         $estado = $_POST['estado'];
         $cidade = $_POST['cidade'];
         $RioGrandeDoSul = $_POST['RioGrandeDoSul'];
         $Corrientes = $_POST['Corrientes'];
         $SantaCatarina = $_POST['SantaCatarina'];
         $Parana = $_POST['Parana'];
         $numero = $_POST['numero'];
         $logradouro = $_POST['logradouro'];
         $renda = $_POST['renda'];

         echo $pais. "<br>";
         echo $cpf. "<br>";
         echo $nascimento. "<br>";
         echo $complemento. "<br>";
         echo $estadoCivil. "<br>";
         echo $feminino. "<br>";
         echo $masculino. "<br>";
         echo $estado. "<br>";
         echo $cidade. "<br>";
         echo $renda . "<br>";
         echo $logradouro . "<br>";
         echo $numero. "<br>";

         if (empty(trim($pais))) {
            echo "<script> alert('campo em branco'); window.location.href='./cadastroPais.php'</script>";
         } else {
            echo "<script> alert('campo preenchido'); window.location.href='./cadastroPais.php'</script>";
            //echo header(location: '../cadastroPais.php');
         }
      } else {
        echo "sorry buddy, your document wasn´t send <script> alert('������������������'); window.location.href='./cadastroPais.php'</script>";
      };
?>