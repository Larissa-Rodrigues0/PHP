<?php
// tipo 1: sem E (parâmetro) e sem S (retorno)
function exibeMsg(){
    echo "Olá Mundo";
}
exibeMsg();
echo "<hr>";

// tipo 2: sem E e com S
function retornoMsg(){
    $msg = "blabla";
    return $msg;
}
echo retornoMsg(); //mostra o retorno
echo "<hr>";

// tipo 3: com E e sem S
function pessoalMsg($quem){
    echo "Olá $quem!";
}
$pessoa = "cachorro";
pessoalMsg($pessoa);
echo "<hr>";

// tipo 4: com E e com S
function dobrar($num){
    $dobro = $num * 2;
    return $dobro;
}
$x = 9;
echo "O dobro de $x é " . dobrar($x);
echo "<hr>";

$banana = 4;


?>