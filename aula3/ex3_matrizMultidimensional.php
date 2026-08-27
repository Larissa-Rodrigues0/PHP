<?php
// matriz multidimensional
$carros = array(
    array("GM", "Spin", "2019"),
    array("VW", "Polo", "2020"),
    array("Honda", "HR-V", "2009"),
    array("Fiat", "Onix", "2017")
);
    
    echo "<pre>";
    print_r($carros);
    //exibir marca, modelo e ano do primeiro carro
    echo "<p>" . $carros[0][1] . "</p>";
    for($i=0; $i<3; $i++){
        echo $carros[0][$i] . " ";
    }
    // listar todos os carros
    echo "<br>";
    $tam = count($carros);
    echo "<ol>";
    for($i=0; $i<$tam; $i++){
        echo "<li>";
        for($j=0; $j<$tam; $j++){
            echo $carros[$i][$j] . " ";
        }
        echo "</li>";
        
    }
    echo "</ol>";

?>

<style>
    *{
        background-color: gray;
        color: white;
    }
</style>
