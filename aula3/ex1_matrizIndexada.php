<?php 

    //matriz indexada
    $frutas = array("melão", "banana", "uva", "maçã"); 
    echo "<pre>"; // deixa o array com o formato original
    var_dump($frutas);

    $frutas[4] = "morango";
    $frutas[1] = "kiwi";
    $frutas[3] = ""; //não recomendado

    //exibir uva em um paragrafo
    echo "<p> $frutas[2]";

    // exibir frutas como lista html
    $tam = count($frutas);
    echo "<ol>";
    for($i=0; $i<$tam; $i++){
        echo "<li> $frutas[$i]</li>";
    }
    echo "</ol>";



    

?>

<style>
    *{
        background-color: gray;
        color: white;
    }
</style>
