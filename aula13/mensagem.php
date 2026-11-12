<?php
   require_once('conecta.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
</head>
<body>
    <style>
        body{
            background-color: #787777;
        }
    </style>
    <h1>Criar mensagem</h1>
    <form action="" method="post">
        Mensagem: <input type="text" name="txtmsg">
        <p>
            Autor:
            <select name="seluser" id="">
                <option value="0">Selecione um autor</option>
                <?php
                $sql1 = "SELECT id_user, usuario FROM tb_users order by usuario ASC";
                $res1 = mysqli_query($con, $sql1);
                $dados1 = mysqli_fetch_all($res1);
                foreach($dados1 as $autor){
                    echo "<option value='".$autor[0]."'>".$autor[1]."</option>";
                }
                ?>
            </select>
        </p>
        <p>
            Tópico:
            <select name="seltopico" id="">
                <option value="0">Selecione um tópico</option>

                <?php
                $sql2 = "SELECT id_topico, nome FROM tb_topicos";
                $res2 = mysqli_query($con, $sql2);
                $dados2 = mysqli_fetch_all($res2);
                foreach($dados2 as $topico){
                    echo "<option value='".$topico[0]."'>".$topico[1    ]."</option>";
                }
                ?>
            </select>
        </p>
        <p>
            <input type="submit" name="btn1" value="Enviar">
        </p>
    </form>
</body>
</html>