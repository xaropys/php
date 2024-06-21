<?php
      if( isset($_POST['enviar']) ) {
         $nome = $_POST['nome'];
         echo $nome;

         if (empty(trim($pais))) {
            echo "<script> alert('campo em branco'); window.location.href='./cadastroEstado.php'</script>";
         } else {
            echo "<script> alert('campo preenchido'); window.location.href=' ./cadastroEstado.php'</script>";
            //echo header(location: '../cadastroPais.php');
         }
      } else {
        echo "sorry buddy, your document wasn´t send <script> alert('������������������'); window.location.href='./cadastroEstado.php'</script>";
      };
?>