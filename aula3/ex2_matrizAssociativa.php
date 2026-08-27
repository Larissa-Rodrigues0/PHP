<?php
//matriz Associativa
    $idades = [ // {} cria matriz tambem
        "maria"=>19, 
        "maju"=>22, 
        "leo"=>43, 
        "gustavo"=>25
        ];

    echo "<pre>";
    // adiciona mais um elemento com idade
    $idades["altair"] = 60;
    print_r($idades); // deixa em um formato mais humano

    $tam = count($idades);
    //lista como lista orgenada (ol)
    /* forma errada:
    echo "<ol>";
    for ($i=0; $i<$tam; $i++){
        echo "<li> $idades[$i] </li>";
    }
    echo "</ol>";
    */

    echo "<ul>";
    foreach($idades as $pessoa){ //pega so o valor
        echo "<li>$pessoa</li>";
    }
    echo "</ul>";

    echo "<br><hr><br>";

    echo "<ol>";
    foreach ($idades as $nome=>$idade){ // pegar nome e idade com $key => $value
        echo "<li>$nome tem $idade anos.</li>";
    }
    echo "</ol>";
    


?>

<style>
    *{
        background-color: gray;
        color: white;
    }
</style>
