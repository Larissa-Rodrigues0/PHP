
<?php
    $computador = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "banco";
    $con = mysqli_connect($computador, $usuario, $senha, $db);

    if($con){
        echo "Conectado com sucesso ao SGBD.";
        
    }