<?php

if (isset($_POST['cor'])) {
    setcookie("cor_salva", $_POST['cor'], time() + 86400, "/");
    $cor = $_POST['cor'];

} else {
    $cor = isset($_COOKIE['cor_salva']) ? $_COOKIE['cor_salva'] : '#000000';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Mudar Cor</title>
    <style>
        

        .quadrado {
            width: 150px;
            height: 150px;
            background-color: <?php echo $cor; ?>;
            border-radius: 10px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        form {
            margin-top: 15px;
        }

    </style>
</head>

<body>

    <div class="quadrado"></div>

    <br>

    <form method="POST">

        <input
            type="color"
            name="cor"
            value="<?php echo $cor; ?>"
        >

        <button type="submit">
            Confirmar Cor
        </button>

    </form>

</body>

</html>
