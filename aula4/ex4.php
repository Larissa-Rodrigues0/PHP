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
    <h1>Tabelas</h1>
    <table border = "1">
        <tr> <!--table row-->
            <td>1</td> <!--table data-->
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
    </table>
        <!--Crie uma matriz veiculos com dados:
        Colunas: Fab, Modelo, Ano, Valor
        Exibir tudo em tabela com o php
        -->
        <table border = "1">
        <tr>
            <td>Fabricante</td>
            <td>Modelo</td>
            <td>Ano</td>
            <td>Valores</td>
        </tr>
        <?php 
        
        $matrizValores = [
            ["fab1", "modelo1", "ano1", "valor1"],
            ["fab2", "modelo2", "ano2", "valor2"],
            ["fab3", "modelo3", "ano3", "valor3"],
            ["fab4", "modelo4", "ano4", "valor4"]
        ];
        
        
        
        foreach($matrizValores as $linha){
    
            echo "<tr>";
            
            foreach($linha as $valor){
                echo "<td>" . $valor . "</td>";
            }
            
            echo "</tr>";
            echo "<br>";
        }
        
        echo "</table>"


        ?>

    
</body>
</html>