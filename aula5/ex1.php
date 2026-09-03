<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Arquivos</title>
</head>
<body>
    <style>
        *{
            background-color: gray;
        }
    </style>
    <h1>Gerenciamento de arquivo</h1>
    <h2>Envio de arquivo</h2>
<!--  -->
    <form action="" method="post" enctype="multipart/form-data">
        <p><input type="file" name="uplfoto" accept="imagem/*"></p> 
        <p><input type="submit" name="btn1" value="Enviar"></p>
    </form>

    
    <?php
    //print_r($_POST); // dados comuns
    //print_r($_FILES); // metadados do arquivo
    $pasta = "img/"; //caminho da pasta no servidor
        if(isset($_POST['btn1'])){

            $nomeArquivo = $_FILES["uplfoto"]["tmp_name"];
            $tamanhoArquivo = $_FILES["uplfoto"]["size"];

            if($tamanhoArquivo == 0){
                echo "<h3>Escolha uma foto para completar o envio!";
                return;
            }elseif($tamanhoArquivo > 3000000){
                echo "<h3>Tamanho maximo(3mb) ultrapassado";
                return;
            }
            
        
            $nomenovo = time() . ".jpg"; //numero naseado na hora atual
            $destino = $pasta.$nomenovo;
            if(!move_uploaded_file($nomeArquivo, $destino)){
                //move o arquivo
                echo "Falha no upload";
            }else{
                //exibe a imagem <img src='ima.gem'>
                echo "<p>Sucesso no envio</p>";
                $img = "<img src='$destino' width='800'>";
                echo $img;
            }
        }
        
    ?>
    <hr>
    <h2>Arquivos no servidor</h2>
    <?php
    $arquivos = scandir($pasta);

    // exibir todas as miniaturas validas
    $qtd = count($arquivos);
    echo "<table border='1' class='tabela'>";
    for($i=2; $i<$qtd; $i++){
        echo "<tr>
            <td><img src='$pasta$arquivos[$i]' width='500'></td>
            <td><a href='del.php?arq=$arquivos[$i]'>X</a></td>
            </tr>";
    }
    echo "</table>"
    ?>
</body>
</html>