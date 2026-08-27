<?php
    /** 
     * 1) Crie uma string
    */

    $frase = "comida e bom demais cara";
    $quant_caracter = strlen($frase);

    //* 2) Exiba  quantos caracteres tem nela strlen()
    echo "A frase: $frase <br>Tem " . $quant_caracter . " caracteres.";
    /* 3) Exiba o primeiro caracter da frase */
    echo "<p>A primeira letra da frase é: " . $frase[0];
    // 4) exibir o ultimo caracter da frase
    echo "<p>A ultima letra da frase é: " . $frase[$quant_caracter-1];

    // 5) exibir um caracter por linha
    echo "<p>Caracteres:";
    for($i = 0; $i < 24; $i++){
        echo "<br>" . $i + 1 . ". $frase[$i]";
    }

    // 6) exibir a palavra invertida
    echo "<p>Caracteres invertidos:";
    for($j = $quant_caracter -1; $j >= 0; $j--){
        echo "<br>" . $j + 1 . ". $frase[$j]";
    }

    // 7) verificar se a frase é um polindromo
    $ult = $quant_caracter-1;
    $palindromo = true;
    for($m=0; $m<$quant_caracter; $m++){
        $inv[$ult-$m] = $frase[$m];
    }
    for($l=0; $l<$quant_caracter; $l++){
        if($frase[$l]!=$inv[$l])
            {
                echo "<p>Não palíndromo!";
                $palindromo = false;
                break;
            }
            
    }




?>