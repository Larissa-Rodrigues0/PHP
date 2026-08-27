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
    </style>
    <h1>Interesses:</h1>
    <form action="" method="post">
    <p>
        <input type="checkbox" name="ckint[]" value="e">Esportes <br>
        <input type="checkbox" name="ckint[]" value="f">Fofoca <br>
        <input type="checkbox" name="ckint[]" value="p">Politica <br>
        <input type="checkbox" name="ckint[]" value="t">Tecnologia <br>
    </p>
    <p>
        <input type="submit" name="btn1">
        <input type="reset" value="limpar">
    </p>
    </form>

    <?php
    if(!isset($_POST['ckint'])){
        die("<p>Nenhum interesse selecionado");
    }
    // listar os interesses do usuario
    echo "<h3>Lista dos interesses: </h3>"; 
    echo "<ul>";
        foreach($_POST['ckint'] as $int){
            $intstr = "";
            switch($int){
                case "e":
                    $intstr = "Esporte";
                    break;
                case "f":
                    $intstr = "Fofoca";
                    break;
                case "p":
                    $intstr = "Politica";
                    break;
                case "t":
                    $intstr = "Tecnologia";
                    break;
            }
            echo "<li>$intstr</li>";
        }
        
    echo "</ul>";
    ?>
</body>
</html>