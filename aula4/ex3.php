<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            background-color: gray;
        }
        select{
            background-color: white;
            border-radius: 20px;
        }
        option{
            background-color: #c3c3c3;
        }
    </style>
    <h1>Caixa de Seleção</h1>
    <form action="" method="post">
    <p>Informe seus dados: <br>
        Nome:<input type="text" name="nome"> <br>
        Idade:  <input type="number" name="idade">
    </p>
    <p>Selecione seu estado:
        <select name="seluf" id="">
            <option value="sp">São Paulo</option>
            <option value="rj">Rio de Janeiro</option>
            <option value="sc">Santa Catarina</option>
            <option value="ba">Bahia</option>
        </select>
    </p>
    <p>
        <input type="submit" name="bnt1">
    </p>
    </form>
    <?php
        // receba nome, idade e estado. Faça uma saudação ao usuario de acordo com seu estado e idade.
        echo "<pre>"; print_r($_POST); echo "</pre>";


    ?>

</body>
</html>