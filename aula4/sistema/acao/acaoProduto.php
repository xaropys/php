<?php

if(isset($_POST['enviar'])) {
    $produto = $_POST['produto'];
    $categoria = $_POST['categoria'];
    $photo = $_POST['photo']["name"];
    $photo_size = $_FILES['photo']["size"];
    $photoType = $_FILES['photo']["type"];
    md5 = md5(time());
    $textarea = $_POST['textarea'];
    $caminho = $_FILES ;

     echo $produto;
     echo $categoria;
     echo $photo;
     echo $textarea;

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