<?php
    require_once("conecta.php");//anexa biblioteca
    $sql = "SELECT * FROM   tb_textos";//cria string de consulta SQL
    $res = mysqli_query($con, $sql);//executa uma consulta no MySQL e retorna um objeto
    echo "<pre>";
    var_dump($res);
    echo "
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Texto</th>
            </tr>
        ";
        //converte linha a linha
    while ($linha = mysqli_fetch_array($res,2)) 
    {
        echo "
            <tr>
                <td>$linha[0]</td>
                <td>$linha[1]</td>
            </tr>";
    }
    //exibir os dados em tabela html
?>