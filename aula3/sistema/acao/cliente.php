<?php
      if( isset($_POST['enviar']) ) {
         $pais = $_POST['pais'];
         echo $pais;

         if (empty(trim($pais))) {
            echo "<script> alert('campo em branco'); window.location.href='../cadastroPais.php'</script>";
         } else {
            echo "<script> alert('campo preenchido'); window.location.href='../cadastroPais.php'</script>";
            //echo header(location: '../cadastroPais.php');
         }
      } else {
        echo "sorry buddy, your document wasn´t send <script> alert('������������������'); window.location.href='../cadastroPais.php'</script>";
      };
?>