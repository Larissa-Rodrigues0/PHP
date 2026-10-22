<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Galeria de Documentos</title>
</head>
<body>

<h1>Enviar Documento</h1>

<?php

// ========================================
// EXCLUSÃO DO ARQUIVO
// ========================================

if (isset($_GET["excluir"])) {

    $arquivo = $_GET["excluir"];

    $caminho = "uploads/" . $arquivo;

    if (file_exists($caminho)) {

        unlink($caminho);

        echo "<p>Arquivo excluído com sucesso!</p>";

    } else {

        echo "<p>Arquivo não encontrado.</p>";
    }
}


// ========================================
// UPLOAD DO ARQUIVO
// ========================================

if (isset($_POST["btn"])) {

    $nomeDocumento = $_POST["nome"];

    $arquivo = $_FILES["arquivo"];

    // Verifica se o arquivo foi enviado corretamente
    if ($arquivo["error"] === UPLOAD_ERR_OK) {

        $nomeOriginal = $arquivo["name"];
        $tamanho = $arquivo["size"];

        // Pega a extensão do arquivo
        $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

        // Extensões permitidas
        $extensoesPermitidas = ["pdf", "png", "jpg"];

        // Tamanho máximo: 2 MB
        $tamanhoMaximo = 2 * 1024 * 1024;


        // Verifica a extensão
        if (!in_array($extensao, $extensoesPermitidas)) {

            echo "<p>Formato de arquivo não permitido.</p>";

        // Verifica o tamanho
        } elseif ($tamanho > $tamanhoMaximo) {

            echo "<p>O arquivo é maior que 2MB.</p>";

        } else {

            // Cria um nome único
            $novoNome = uniqid() . "." . $extensao;

            // Define onde o arquivo será salvo
            $destino = "uploads/" . $novoNome;

            // Move o arquivo
            if (move_uploaded_file($arquivo["tmp_name"], $destino)) {

                echo "<p>Arquivo enviado com sucesso!</p>";

            } else {

                echo "<p>Erro ao enviar o arquivo.</p>";
            }
        }
    }
}

?>

<!-- ========================================
     FORMULÁRIO
======================================== -->

<form action="" method="post" enctype="multipart/form-data">

    <p>
        Nome do Documento:
        <input type="text" name="nome" required>
    </p>

    <p>
        Arquivo:
        <input
            type="file"
            name="arquivo"
            accept=".pdf,.png,.jpg"
            required
        >
    </p>

    <p>
        <input type="submit" name="btn" value="Enviar">
    </p>

</form>


<hr>


<h1>Documentos</h1>

<table border="1">

    <tr>
        <th>Arquivo</th>
        <th>Visualizar</th>
        <th>Ação</th>
    </tr>

<?php

// Lê os arquivos da pasta uploads
$arquivos = scandir("uploads/");

foreach ($arquivos as $arquivo) {

    // Ignora "." e ".."
    if ($arquivo != "." && $arquivo != "..") {

        echo "<tr>";

        echo "<td>" . $arquivo . "</td>";

        echo "<td>";
        echo "<a href='uploads/$arquivo' target='_blank'>Visualizar</a>";
        echo "</td>";

        echo "<td>";
        echo "<a href='?excluir=$arquivo'>Excluir</a>";
        echo "</td>";

        echo "</tr>";
    }
}

/**Exercício 3: Formulários, Upload de Arquivos e Gerenciamento (Sem Banco de Dados)

Crie um sistema simples de galeria de documentos pessoais onde os usuários podem enviar arquivos e excluí-los posteriormente. O projeto deve ser dividido em dois arquivos: index.php (interface e lógica) e uma pasta uploads/ para armazenar os arquivos.
Requisitos:
Formulário HTML (index.php):
Um formulário com o atributo enctype="multipart/form-data".
Um campo de texto para o Nome do Documento (ex: "Contrato", "RG", "Comprovante").
Um campo de arquivo (<input type="file">) que aceite apenas formatos específicos (ex: PDF, PNG, JPG) e limite o tamanho (ex: máximo de 2MB).
Processamento do Upload (POST):
Valide se o arquivo foi enviado sem erros ($_FILES['arquivo']['error'] === UPLOAD_ERR_OK).
Valide a extensão e o tamanho do arquivo.
Renomeie o arquivo de forma única (ex: usando uniqid() ou time()) para evitar sobrescrever arquivos com nomes iguais, preservando a extensão original.
Mova o arquivo temporário para a pasta uploads/.
Listagem e Exclusão (GET / Sistema de Arquivos):
Utilize funções do sistema de arquivos do PHP (como scandir() ou glob()) para ler todos os arquivos presentes na pasta uploads/.
Exiba os arquivos em uma tabela HTML contendo o nome do arquivo, a miniatura/link para visualização e um botão ou link de Excluir.
Implemente a lógica de exclusão: quando o usuário clicar em excluir, o script deve capturar o nome do arquivo via $_GET, verificar se ele existe de fato na pasta uploads/ e apagá-lo usando unlink(). */

?>

</table>

</body>
</html>