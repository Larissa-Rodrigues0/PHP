<?php
   require_once('conecta.php');
   $msg = $_POST['txtmsg'];
   $autor = $_POST['seluser'];
   $topico = $_POST['seltopico'];
   $sql = "INSERT INTO tb_mensagens (mensagem, id_user, id_topico) VALUES (?,?,?)";
   $stmt = mysqli_stmt_init($con);
   mysqli_stmt_prepare($stmt, $sql);
   mysqli_stmt_bind_param($stmt, "sii", $msg, $autor, $topico);
   mysqli_stmt_execute($stmt);
   $qtd = mysqli_stmt_affected_rows($stmt);
   if($qtd==1){
       echo "Registro inserido com sucesso";
       echo "Listar Mensagens: <a href='listar_mensagens.php'>Listar</a>";
   }
?>
