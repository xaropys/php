<?php

if( isset($_POST['sendNukes']) ){
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $area2 =  $_POST['area2'];
    $age =  $_POST['age'];

    echo $nome. "<br>";
    echo $estado. "<br>";
    echo $area2. "<br>";
    echo $age. "<br>";
} else {
    echo "Nao foi possivel enviar o formulario";
};

?>