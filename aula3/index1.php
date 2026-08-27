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
        color: white;
        }
        .formIMC{
            background-color: #bc9c9c;
            margin: 30px;
            border-radius: 30px;
            
            
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .btnIMC{
            background-color: #8a5e5e;
            border: none;
            border-radius: 30px;
            margin: 10px;
        }

        .txtIMC{
            
        }
    </style>
    <!-- formulario PHP exige que todo campo tenha name-->
    <form action="" method="get">
        Numero: <input type="text" name="txtNum">
        <input type="submit" name="btn1" value="Calcular">
    </form>
    <?php
        echo "<pre>";
        print_r($_GET);
        $num = $_GET['txtNum'];
        echo $num/2;
    ?>

    <br><hr>
<!--  recebe P e A; calcule IMC e classifique  -->
  <div class="divIMC">
    <form action="" method="get" class="formIMC">
        <p class="txtIMC">Peso:</p> <input type="text" name="peso">
        <p class="txtIMC">Altura:</p> <input type="text" name="alt"> 
        <input type="submit" name="btnIMC" value="Calcular" class="btnIMC">
    </form>
    </div>
    <?php
    $peso = $_GET['peso'];
    $alt = $_GET['alt'];
    $resul =  $peso/($alt*$alt);
    if($resul < 18){
        echo "Abaixo do peso";
    }else if ($resul < 24){
        echo "Normal";
    }else if ($resul < 29){
        echo "Sobrepeso";
    }else{
        echo "Obeso";
    }
    ?>
</body>
</html>