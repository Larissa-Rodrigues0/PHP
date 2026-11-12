<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Usuario: <input type="text" name="txtuser">
        Senha: <input type="text" name="txtsenha">

        <input type="submit" name="btn1" value="Enviar">
    </form>
</body>
</html>
<?php
    require_once('conecta.php');
    if(isset($_POST['btn'])){
        $user = $_POST['txtuser'];
        $pw = $_POST['txtsenha'];
        $sql = "SELECT * FROM tb_users 
            WHERE 
            username=? 
            AND
            password=? 
            LIMIT 1";
        $stmt = mysqli_stmt_init($con);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $idmsg);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $res = mysqli_stmt_get_result($stmt);
        $dados = mysqli_fetch_all($res);
        if(count($dados)==1){
            echo "Sucesso com $user";
        }
        else{
            echo "Usuário/senha inválidos";
        }

    }