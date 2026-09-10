<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculo de Temperaturas</h1>

    <form action="" method="post">
    <p>Converter:</p>
    <p>
        <select name="converter" id="">
            <option value="c">Celsius</option>
            <option value="f">Fahrenheit</option>
            <option value="k">Kelvin</option>
        </select>
    </p>
    <p><input type="number" step="0.01" placeholder="0.00" name="valorTemp" required> <br>
    <p>Para:</p>
    <p>
        <select name="para" id="">
            <option value="c">Celsius</option>
            <option value="f">Fahrenheit</option>
            <option value="k">Kelvin</option>
        </select>
    </p>
    <p>
        <input type="submit" name="bnt1" value="Calcular">
    </p>
    </form>
    <?php
        // 1. Usando modularização. Crie um conversor de temperaturas. Usuario escolhe unidade de entrada e saida.
        
        //echo "<pre>"; print_r($_POST); echo "</pre>";
        $tempInicial = $_POST["converter"];
        $valorTempInicial = $_POST["valorTemp"];
        $tempFinal = $_POST["para"];

        function calcC($tempFinal, $valorTempInicial){
            if($tempFinal === "k"){
                $calculo = $valorTempInicial + 273.15;
                echo "Resultado do Calculo: " . $calculo . "K°";

            }elseif($tempFinal === "f"){
                $calculo = ($valorTempInicial * 1.8) + 32;
                echo "Resultado do Calculo: " . $calculo . "F°";
            }
        }

        function calcF($tempFinal, $valorTempInicial){
            if($tempFinal === "k"){
                $calculo = ((($valorTempInicial - 32) * 5) / 9) + 273.15;
                echo "Resultado do Calculo: " . $calculo . "K°";

            }elseif($tempFinal === "c"){
                $calculo = ($valorTempInicial - 32) / 1.8;
                echo "Resultado do Calculo: " . $calculo . "C°";
            }
        }

        function calcK($tempFinal, $valorTempInicial){
            if($tempFinal === "c"){
                $calculo = $valorTempInicial - 273.15;
                echo "Resultado do Calculo: " . $calculo . "C°";

            }elseif($tempFinal === "f"){
                $calculo = ($valorTempInicial - 273.15) * 1.8 + 32;
                echo "Resultado do Calculo: " . $calculo . "F°";
            }
        }

        switch($tempInicial){
            case "c": 
                calcC($tempFinal, $valorTempInicial);
                break;

            case "f": 
                calcF($tempFinal, $valorTempInicial);
                break;

            case "k": 
                calcK($tempFinal, $valorTempInicial);
                break;

        }


    ?>
    
</body>
</html>