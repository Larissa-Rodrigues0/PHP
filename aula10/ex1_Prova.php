<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="?txtnome=Fulano&rdsexo=Masculino">Link</a>
    <?php
        if(isset($_GET)){
            echo "<pre>";
            print_r($_GET);
        }
    ?>
</body>
</html>
