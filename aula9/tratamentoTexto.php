<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamento de texto</title>
</head>
<body>
    <style>
        *{
            background-color: gray;
        }
    </style>

    <h1>Tratamento de texto</h1>
    <?php
    $t1 = "Leonardo";
    echo "<p>Texto original: $t1";
    echo "<p>Tudo Maiúsculas: " . strtoupper($t1);  // converte para maiusculas
    echo "<p>Todas minusculas: " . strtolower($t1); // converte para minusculas
    echo "<p>Primeira letra da string " . ucfirst($t1) ; //converte a primeira letra para maiscula
    echo "<p>Primeira letra de cada palavra maiuscula: " . ucwords($t1);
    echo "<hr>";

    $v1 = "";
    $v2 = 0;
    if(empty($v1)==true){echo "<p>$v1 Vazia";} // retorna true se a string for vazia
    if(empty($v2)==true){echo "<p>$v2 Vazia";} // retorna true se a string for vazia
    echo "<br>";
    $n1 = 333; var_dump($n1);
    $n2 = "333"; var_dump($n2);
    if(is_numeric($n1)){echo "<p>$n1 é numerico";}
    if(is_numeric($n2)){echo "<p>$n2 é numerico";}
    if(is_string($n1)==false){echo "<p>$n1 não é string";}
    if(!is_string($n1)){echo "<p>$n1 não é string";}
    if(is_string($n2)){echo "<p>$n2 é string";}
    $n3 = 3.14;
    if(!is_int($n3)){echo "<p>$n3 não é inteiro";}
    if(is_int($n1)){echo "<p>$n1 é inteiro";}
    if(!is_float($n3)){echo "<p>$n3 é float";}
    $n4 = []; //$n4 = array()
    if(is_array($n4)){echo "<p>$n4 é array";} //echo n funciona com array
    echo "<hr>";

    $t2 = " texto com sobra";
    $t3 = "texto com sobra ";
    $t4 = " texto com sobra ";
    echo "<p>Teste:$t2.";
    echo "<p>Teste:" . trim($t2) . ".";
    echo "<p>Teste:$t3.";
    echo "<p>Teste:" . trim($t3) . ".";
    echo "<p>Teste:$t4.";
    echo "<p>Teste:" . trim($t4) . ".";
    echo "<p>$t1 possui " . strlen($t1) . " caracteres.";// conta caracteres

    $cpf = "123.123.123-33";
    echo "<p>CPF: " . substr_replace($cpf, "**.***-**", 5) . "Está devendo!"; // 1-string original, 2 - novo trecho,
    // $textoentrada, $novo, $qtdpos
    echo "<p>CPF: " . substr_replace($cpf, "*-**", 4). "esta devendo!"; //troca ocorre no 4° de tras para frente
    $t5 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nostrum illum a natus iure perspiciatis alias at, reiciendis ea voluptate libero fuga iusto hic ipsum ratione explicabo sint facilis provident.";
    echo "<p> " . str_replace("o", "*", $t5); // só minusculas
    echo "<p> " . str_ireplace("o", "*", $t5);// troca para maiusculas e minusculas
    $t6 = "foto-jao.png";
    echo "<p>O . esta na posição " . strpos($t6, "."); // conta a partir do zero
    if(str_contains($t5, "fuga")){echo "<p> O texto tem 'fuga'";}
    echo "<hr>";

    $slista = "pera, uva, banana";
    echo "<p>String: $slista <br> Matriz: ";
    $alista = explode(",", $slista);
    print_r($alista);
    echo "<hr>";

    $mat = ["gol", "nivus", "fusca"];
    print_r($mat);
    echo " < Matriz <br> String > " . implode(",",$mat);

    $v3 = 345.45;
    echo "<p>Valor puro: $v3";
    echo "<p> Valor formatado: " . sprintf("R$ %.2f", $v3); // prefixo é R$ Formata com 2 casas com depois do ponto
    echo "<p>Valor formatado: R$ " . number_format($v3, 2, ",", "."); // 1- Valor 2- qtd decimais 3- sep decimais 4- sep milhar

    ?>
</body>
</html>