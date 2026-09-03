<?php
$arq = $_GET['arq'];
//echo $arq;
if(unlink("img/" . $arq)){
    echo "$arq excluido com sucesso!";
    header("location: ex1.php");
}
?>