<?php

session_start();

?>

<html>
<body>

<h1>Meu Carrinho</h1>

<?php

if (!isset($_SESSION["carrinho"]) || count($_SESSION["carrinho"]) == 0) {

    echo "<p>O carrinho está vazio.</p>";

} else {

    // Verifica se clicou no botão Remover
    if (isset($_POST["btnRemover"])) {

        $idRemover = $_POST["id"];

        // Percorre o carrinho
        foreach ($_SESSION["carrinho"] as $indice => $produto) {

            // Encontrou o produto que deve ser removido
            if ($produto["id"] == $idRemover) {

                // Remove o produto da sessão
                unset($_SESSION["carrinho"][$indice]);

                break;
            }
        }

        // Organiza novamente os índices da sessão
        $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    }

?>

    <table border="1">

        <tr>
            <th>ID Produto</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Remover</th>
        </tr>

        <?php

        $total = 0;

        foreach ($_SESSION["carrinho"] as $produto) {

        ?>

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
                            name="btnRemover"
                            value="Remover"
                        >

                    </form>

                </td>

            </tr>

        <?php

            $total += $produto["valor"];

        }

        ?>

        <tr>

            <td colspan="2">
                <strong>Total:</strong>
            </td>

            <td colspan="2">
                <strong>
                    R$ <?php echo number_format(
                        $total,
                        2,
                        ',',
                        '.'
                    ); ?>
                </strong>
            </td>

        </tr>

    </table>

<?php } ?>

<br>

<a href="atividade.php">
    <button type="button">Voltar para Produtos</button>
</a>

</body>
</html>
