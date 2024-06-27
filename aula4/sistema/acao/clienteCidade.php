<?php
      if( isset($_POST['enviar']) ) {
         $nome = $_POST['nome'];
         echo $nome;

         if (empty(trim($pais))) {
            echo "<script> alert('campo em branco'); window.location.href='./cadastroPais.php'</script>";
         } else {
            echo "<script> alert('campo preenchido'); window.location.href=' ./cadastroCidade.php'</script>";
            //echo header(location: '../cadastroPais.php');
         }
      } else {
        echo "sorry buddy, your document wasn´t send <script> alert('������������������'); window.location.href='./cadastroCidade.php'</script>";
      };
?>