<!DOCTYPE html>
<html lang="en">
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

        .form{
            padding: 10px;
            background-color: white;
            margin: 10px;
        }
    </style>
    <form action="" method="post" class="form">
        <p>Time Favorito</p>
        <input type="radio" name="rdtime" id="cor">Corinthians <br>
        <input type="radio" name="rdtime" id="san">Santos <br>
        <input type="radio" name="rdtime" id="pal">Palmeiras <br>
        <input type="radio" name="rdtime" id="sao">São Paulo <br>
        <input type="submit" name="btn1">
    </form>
    <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        if(!isset($_POST['rdtime'])){ // procura rdtime em post e true se não achar
            echo "<p>Nenhum time selecionado</p>";
        }else{
            echo "<p>Selecionou: " . $_POST['rdtime'];
        }
    ?>
</body>
</html>