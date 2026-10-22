<?php
    require_once("conecta.php");
    $sql = "SELECT * FROM tb_textos";
    $res = mysqli_query($con, $sql);
    echo "<pre>";
    print_r($res);
    while($linha = mysqli_fetch_array($res,2)){
        echo "<li>$linha[0] - $linha[1]";
    }

    // exibir os dados em table html
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th><td>id</td><td>texto</td></th>
        <?php 
        $matriz = $linha = mysqli_fetch_array($res,2);
            foreach($matriz as $elemento){
                echo 
                    "<td>" . $elemento . "</td>";
            }
        ?>
    </table>
</body>
</html>