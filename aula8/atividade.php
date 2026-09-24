<?php

session_start();

$produtos = [
    [
        "id" => 1,
        "descricao" => "Notebook",
        "valor" => 3500.00
    ],
    [
        "id" => 2,
        "descricao" => "Mouse",
        "valor" => 80.00
    ],
    [
        "id" => 3,
        "descricao" => "Teclado",
        "valor" => 150.00
    ]
];


// Cria o carrinho na sessão caso ele ainda não exista
if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = [];
}


// Verifica se o botão foi clicado
if (isset($_POST["btnAdicionar"])) {

    $idProduto = $_POST["id"];

    // Procura o produto pelo ID
    foreach ($produtos as $produto) {

        if ($produto["id"] == $idProduto) {

            // Adiciona o produto ao carrinho
            $_SESSION["carrinho"][] = $produto;

            break;
        }
    }
}

?>

<html>
<body>

<h1>Produtos</h1>

<table border="1">

    <tr>
        <th>ID Produto</th>
        <th>Descritivo</th>
        <th>Valor</th>
        <th>Adicionar ao Carrinho</th>
    </tr>

    <?php foreach ($produtos as $produto) { ?>

        <tr>

            <td>
                <?php echo $produto["id"]; ?>
            </td>

            <td>
                <?php echo $produto["descricao"]; ?>
            </td>

            <td>
                R$ <?php echo number_format(
                    $produto["valor"],
                    2,
                    ',',
                    '.'
                ); ?>
            </td>

            <td>

                <form action="" method="post">

                    <input
                        type="hidden"
                        name="id"
                        value="<?php echo $produto["id"]; ?>"
                    >

                    <input
                        type="submit"
                        name="btnAdicionar"
                        value="Adicionar"
                    >

                </form>

            </td>

        </tr>

    <?php } ?>

</table>

<br>

<a href="carrinho.php">
    <button type="button">Ver Carrinho</button>
</a>

</body>
</html>

<?php
/*
1) Carrinho Compras 
A) Criar uma matriz com produtos (descrição e valor)
B) Exibir na tela a matriz como tabela. Ultima coluna dever ser 
um botão para adicionar ao carrinho.
C) O botão adiciona o produto a sua sessão que representa o carrinho.
D) Criar uma pagina para visualizar carrinho somando os produtos nele.

*/
