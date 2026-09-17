<?php
    if(isset($_COOKIE["cor"])){
        echo "Cor atual: " . $_COOKIE["cor"];
    }
    if(isset($_POST["cor1"])){
        echo "Cor desejada: " . $_POST["cor1"];
    }

    header("location: ")
?>