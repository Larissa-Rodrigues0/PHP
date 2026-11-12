<?php

    require_once('conecta.php');
    $sql = "SELECT id_mensagem, mensagem, nome, usuario 
        FROM tb_mensagens 
        natural join tb_users 
        natural join tb_topicos";

    $res = mysqli_query($con, $sql);
    $dados = mysqli_fetch_all($res);
?>
<table>
    <tr>
        <th>ID</th>
        <th>Mensagem</th>
        <th>Tópico</th>
        <th>Autor</th>
        <th>Alt</th>
        <th>Del</th>
    </tr>
    <?php
        foreach($dados as $msg){
            echo "<tr>";
            echo "<td>".$msg[0]."</td>";
            echo "<td>".$msg[1]."</td>";
            echo "<td>".$msg[2]."</td>";
            echo "<td>".$msg[3]."</td>";
            echo "<td><a href='alterar_mensagem.php?idmsg=".$msg[0]."'>Alterar</a></td>";
            echo "<td><a href='excluir_mensagem.php?idmsg=".$msg[0]."'>Deletar</a></td>";
            echo "</tr>";
        }
    ?>
</table>