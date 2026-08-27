<?php

    /** 3) Calcule IMC (IMC = peso / (altura*altura) )
     * Classifique em uma das 5 categorias (muito abaixo, abaixo, normal, acima, muito acima. Use Kg e metros.
     */
    $altura = 1.68;
    $peso = 70;
    $imc = $peso / ($altura*$altura);

    /* switch($imc){
        case ($imc < 18.5){
            echo "Abaixo do peso";
            break;
        }
        case ($imc =< 24.9){
            echo "Peso normal";
            break;
        }
        case ($imc < 29.9){
            echo "Sobrepeso";
            break;
        }
        case ($imc < 18.5){
            echo "Abaixo do peso";
            break;
        }
        case ($imc < 18.5){
            echo "Abaixo do peso";
            break;
        }
    break;
    } */

    if($imc < 18){
        echo "muito abaixo";
    }elseif($imc < 24){
        echo "baixo";
    }elseif($imc < 26){
       echo "normal";
    }elseif($imc < 29){
        echo "acima";
    }else{
        echo "muito acima";
    }

?>