<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <p>Digite seu nome completo: </p> 
       <p> <input type="text" name="nome" required></p> 
       <p> <input type="submit" name="btn" value="Enviar"> </p>
    </form>
    
</body>
</html>

<?php
/*
Exercício 1: Manipulação de Strings e Validação

Crie uma função em PHP chamada formataCitacaoBibliografica($nomeCompleto) que receba uma string contendo um nome completo.

Requisitos:
Valide se o nome possui pelo menos duas palavras. Caso contrário, retorne uma mensagem de erro ("Nome incompleto").
Converta o último sobrenome para letras maiúsculas e coloque-o no início, seguido por uma vírgula.
Mantenha os demais nomes e sobrenomes em formato normal (ou capitalizados) após a vírgula.
Exemplo de entrada: "joão pedro da silva"
Exemplo de saída: "SILVA, João Pedro da"
*/

if(isset($_POST["btn"])){

    $nomeCompleto = $_POST["nome"];
    $nomeCompletoLimpo = trim($nomeCompleto);

    function formataCitacaoBibliografica($nomeCompletoLimpo){

        $numeroDePalavras = str_word_count($nomeCompletoLimpo);

        if($numeroDePalavras < 2){
            return "Nome incompleto";
        }

        // Separa as palavras
        $partes = explode(" ", strtolower($nomeCompletoLimpo));

        // Pega o último sobrenome
        $ultimoSobrenome = strtoupper(array_pop($partes));

        // Junta o restante do nome
        $restanteNome = ucwords(implode(" ", $partes));

        // Retorna a citação
        return $ultimoSobrenome . ", " . $restanteNome;
    }

    echo formataCitacaoBibliografica($nomeCompletoLimpo);
}

?>


