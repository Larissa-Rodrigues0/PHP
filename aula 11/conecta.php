
<?php
    $computador = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "db262_a11t01";
    $con = mysqli_connect($computador, $usuario, $senha, $db);

    if($con){
        echo "Conectado com sucesso ao SGBD.";
        
    }