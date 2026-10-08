
<?php
/**Exercício 2: Arrays e Estruturas de Repetição (Sem Funções de Ordenação)

Crie um script PHP que receba um array numérico contendo notas de alunos (por exemplo: [7.5, 4.0, 9.2, 6.0, 8.5, 5.5]). Sem utilizar funções prontas do PHP como sort(), rsort() ou uasort():

Requisitos:
Calcule e exiba a média aritmética de todas as notas.
Identifique e exiba qual foi a maior e a menor nota do array.
Crie um algoritmo de ordenação (como Bubble Sort ou Selection Sort) para gerar e retornar um novo array ordenado do maior para o menor valor. 
 */

$notas = [7.5, 4.0, 9.2, 6.0, 8.5, 5.5];


// CALCULAR A MÉDIA

$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Média: " . $media . "<br>";


// MAIOR E MENOR NOTA

$maior = $notas[0];
$menor = $notas[0];

foreach ($notas as $nota) {

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

echo "Maior nota: " . $maior . "<br>";
echo "Menor nota: " . $menor . "<br>";


// BUBBLE SORT - MAIOR PARA MENOR

$ordenado = $notas;

for ($i = 0; $i < count($ordenado); $i++) {

    for ($j = 0; $j < count($ordenado) - 1; $j++) {

        if ($ordenado[$j] < $ordenado[$j + 1]) {

            // Troca os valores
            $temporario = $ordenado[$j];
            $ordenado[$j] = $ordenado[$j + 1];
            $ordenado[$j + 1] = $temporario;
        }
    }
}


// ========================================
// EXIBIR ARRAY ORDENADO
// ========================================

echo "Notas ordenadas do maior para o menor: ";

foreach ($ordenado as $nota) {
    echo $nota . " ";
}

?>