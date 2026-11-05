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
                where username='$user' and
                passwordd='$pw' limit '";
        $res = mysqli_query($con, $sql);
        if(mysqli_num_rows($res)==1){
            echo "Sucesso com $user";
        }else{
            echo "Usuario/senha invalidos";
        }

    }