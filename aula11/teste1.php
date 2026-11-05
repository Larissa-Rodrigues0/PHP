<?php
    require_once("conecta.php");
    $texto = microtime();
    $sql = "INSERT INTO tb_textos (texto) values ('$texto')";
    if(mysqli_query($con, $sql)){
        echo "Registro " . mysqli_insert_id($con) . " inserido com sucesso!";
    }
?>