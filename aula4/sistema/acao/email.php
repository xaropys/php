<?php

if(isset($_POST['enviar'])) {
    $email = $_POST['email'];
    $about = $_POST['about'];
    $textarea = $_POST['textarea'];

     mail($email , $about , $textarea);

} else {
    header("Location: ../envioEmail.php");
}

?>