<?php
    $x=9;
    echo "<a href='?id=$x'>Enviar</a>";
    $id = (int)$_GET['id']; //converte para inteiro
    if($id==0){
        $id =1;
        echo "Divisão por zero não permitido";
    }
    echo "<p>ID = $id";
    echo $id/$id;
?>