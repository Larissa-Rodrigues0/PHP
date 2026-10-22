<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $matriz = array(
        array("Nome"=>"Luiz", "Idade"=>63),
        array("Nome"=>"Ana", "Idade"=>35),
        array("Nome"=>"Selma", "Idade"=>59)
    );
    echo "<pre>";
    print_r($matriz);
    ?>

    <table>
        <tr><th>Nome</th><th>Idade</th></tr>
        <?php 
            foreach($matriz as $pessoa){
                echo 
                    "<td>" . $pessoa['Nome'] . "</td>";
                    "<td>" . $pessoa['Idade'] . "</td>";
            }
        ?>
    </table>
</body>
</html>